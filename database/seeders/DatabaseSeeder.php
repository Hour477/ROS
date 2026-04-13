<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles
        $adminRole = \App\Models\Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'System Administrator'
        ]);

        $cashierRole = \App\Models\Role::create([
            'name' => 'Cashier',
            'slug' => 'cashier',
            'description' => 'Front desk staff'
        ]);

        // Users
        \App\Models\User::create([
            'name' => 'Admin Staff',
            'email' => 'admin@ros.com',
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id,
            'state' => 'Active'
        ]);

        // Categories
        $drinks = \App\Models\Category::create(['name' => 'Drinks', 'description' => 'Cold and hot beverages']);
        $food = \App\Models\Category::create(['name' => 'Food', 'description' => 'Main courses and snacks']);

        // Menu Items
        \App\Models\MenuItem::create([
            'category_id' => $drinks->id,
            'name' => 'Iced Latte',
            'price' => 3.50,
            'status' => 'available'
        ]);

        \App\Models\MenuItem::create([
            'category_id' => $food->id,
            'name' => 'Club Sandwich',
            'price' => 5.00,
            'status' => 'available'
        ]);

        // Tables
        \App\Models\Table::create(['name' => 'Table 1', 'capacity' => 2, 'status' => 'available']);
        \App\Models\Table::create(['name' => 'Table 2', 'capacity' => 4, 'status' => 'available']);
        \App\Models\Table::create(['name' => 'Table 3', 'capacity' => 6, 'status' => 'available']);
    }
}
