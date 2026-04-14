<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $allowedModels = [
            'category'  => \App\Models\Category::class,
            'customer'  => \App\Models\Customer::class,
            'menu-item' => \App\Models\MenuItem::class,
            'product'   => \App\Models\MenuItem::class, // Alias for product
            'table'     => \App\Models\Table::class,
            'user'      => \App\Models\User::class,
            'role'      => \App\Models\Role::class,
        ];

        if (!isset($allowedModels[$request->model])) {
            return response()->json([]);
        }

        $model = $allowedModels[$request->model];
        $keyword = $request->keyword ?: $request->q;
        $columns = $request->columns ?? $request->selects ?? ['name'];
        $filters = $request->filters ?? [];

        $query = $model::query();

        $query->when($keyword, function ($q) use ($keyword, $columns) {
            $q->where(function ($qq) use ($keyword, $columns) {
                foreach ($columns as $column) {
                    $qq->orWhere($column, 'like', "%{$keyword}%");
                }
            });
        });

        foreach ($filters as $filter) {
            $field = $filter['field'] ?? null;
            $operator = $filter['operator'] ?? '=';
            $value = $filter['value'] ?? null;

            if (!$field) continue;
            switch ($operator) {
                case '=': $query->where($field, $value); break;
                case '!=': $query->where($field, '!=', $value); break;
                case 'like': $query->where($field, 'like', "%{$value}%"); break;
                case 'not_null': $query->whereNotNull($field); break;
                case 'null': $query->whereNull($field); break;
            }
        }

        return response()->json(
            $query->limit(20)->get()->map(fn ($item) => [
                'id' => $item->id,
                'text' => $item->name ?? $item->label ?? $item->id
            ])
        );
    }

    /**
     * Unified Global Search for Command Palette
     */
    public function global(Request $request)
    {
        $query = $request->get('q');
        if (!$query || strlen(trim($query)) < 1) {
            return response()->json([]);
        }

        $results = [];

        // 1. Quick Actions (Searchable Shortcuts) - PRIORITIZED
        $actions = [
            [
                'title' => __('Create New Order'),
                'keyword' => 'create order new add បង្កើត ការបញ្ជាទិញ ថ្មី',
                'url' => route('orders.create'),
                'icon' => 'plus-circle'
            ],
            [
                'title' => __('Create New Product'),
                'keyword' => 'create product item add menu បង្កើត មុខម្ហូប ថ្មី',
                'url' => route('menu.create'),
                'icon' => 'package-plus'
            ],
            [
                'title' => __('Create New Category'),
                'keyword' => 'create category add group type class បង្កើត ចំណាត់ថ្នាក់ក្រុម ថ្មី ប្រភេទ',
                'url' => route('categories.create'),
                'icon' => 'grid'
            ],
            [
                'title' => __('Add New Customer'),
                'keyword' => 'create customer add person បង្កើត អតិថិជន ថ្មី',
                'url' => route('customers.create'),
                'icon' => 'user-plus'
            ],
            [
                'title' => __('Add New Table'),
                'keyword' => 'create table add room បង្កើត តុ ថ្មី',
                'url' => route('tables.create'),
                'icon' => 'plus-square'
            ],
            [
                'title' => __('Create New User/Staff'),
                'keyword' => 'create user staff add member បង្កើត បុគ្គលិក ថ្មី',
                'url' => route('users.create'),
                'icon' => 'user-check'
            ],
            [
                'title' => __('Create New Role'),
                'keyword' => 'create role add position បង្កើត តួនាទី ថ្មី',
                'url' => route('roles.create'),
                'icon' => 'shield'
            ],
        ];

        foreach ($actions as $action) {
            $searchData = strtolower($action['keyword'] . ' ' . $action['title']);
            if (str_contains($searchData, strtolower($query))) {
                $results[] = [
                    'title' => $action['title'],
                    'path' => __('Quick shortcut to ') . $action['title'],
                    'url' => $action['url'],
                    'icon' => $action['icon'],
                    'category' => __('Quick Actions')
                ];
            }
        }

        // 2. Navigation / Menu Items
        $menuItems = \App\Models\MenuItem::where('name', 'LIKE', "%{$query}%")
            ->limit(5)->get();
        foreach ($menuItems as $item) {
            $results[] = [
                'title' => $item->name,
                'path' => __('Price: ') . number_format($item->price, 2),
                'url' => route('menu.edit', $item->id),
                'icon' => 'utensils',
                'category' => __('Products')
            ];
        }

        // 3. Orders Search
        $orders = \App\Models\Order::where('order_no', 'LIKE', "%{$query}%")
            ->limit(5)->get();
        foreach ($orders as $order) {
            $results[] = [
                'title' => '#' . $order->order_no,
                'path' => __('Status: ') . ucfirst($order->status),
                'url' => route('orders.show', $order->id),
                'icon' => 'shopping-bag',
                'category' => __('Recent Orders')
            ];
        }

        // 4. Customers
        $customers = \App\Models\Customer::where('name', 'LIKE', "%{$query}%")
            ->orWhere('phone', 'LIKE', "%{$query}%")
            ->limit(5)->get();
        foreach ($customers as $customer) {
            $results[] = [
                'title' => $customer->name,
                'path' => $customer->phone ?? __('No phone'),
                'url' => route('customers.edit', $customer->id),
                'icon' => 'user',
                'category' => __('Customers')
            ];
        }

        // 5. Tables
        $tables = \App\Models\Table::where('name', 'LIKE', "%{$query}%")
            ->limit(5)->get();
        foreach ($tables as $table) {
            $results[] = [
                'title' => $table->name,
                'path' => __('Status: ') . ucfirst($table->status),
                'url' => route('tables.create'),
                'icon' => 'layout-grid',
                'category' => __('Dining Tables')
            ];
        }

        return response()->json($results);
    }
}
