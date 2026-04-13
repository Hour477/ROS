<?php

namespace App\Helper;

class NavigationHelper
{
    /**
     * Get the sidebar menu items.
     *
     * @return array
     */
    public static function getSidebarMenu(): array
    {
        $user = auth()->user();
        $isAdmin = $user && $user->role && $user->role->slug === 'admin';

        return [
            [
                'header' => 'MAIN',
                'items' => [
                    [
                        'label' => 'Dashboard',
                        'route' => 'home',
                        'icon' => 'layout-dashboard',
                        'activePattern' => 'home',
                    ],
                ],
            ],
            [
                'header' => 'MANAGEMENT',
                'visible' => $isAdmin,
                'items' => [
                    [
                        'label' => 'Categories',
                        'route' => 'categories.index',
                        'icon' => 'grid',
                        'activePattern' => 'categories.*',
                    ],
                    [
                        'label' => 'Menu Items',
                        'route' => 'menu.index',
                        'icon' => 'utensils-crossed',
                        'activePattern' => 'menu.*',
                    ],
                    [
                        'label' => 'Tables',
                        'route' => 'tables.index',
                        'icon' => 'table',
                        'activePattern' => 'tables.*',
                    ],
                    
                ],
            ],
            [
                'header' => 'SALES & ORDERS',
                'items' => [
                    [
                        'label' => 'Orders',
                        'route' => 'orders.index',
                        'icon' => 'shopping-cart',
                        'activePattern' => 'orders.*',
                    ],
                    [
                        'label' => 'Payments',
                        'route' => 'payments.index',
                        'icon' => 'banknote',
                        'activePattern' => 'payments.*',
                    ],
                    [
                        'label' => 'Kitchen KDS',
                        'route' => 'kitchen.index',
                        'icon' => 'flame',
                        'activePattern' => 'kitchen.*',
                    ],
                ],
            ],
            [
                'header' => 'REPORTS',
                'visible' => $isAdmin,
                'items' => [
                    [
                        'label' => 'Income Report',
                        'route' => 'reports.income',
                        'icon' => 'bar-chart-3',
                        'activePattern' => 'reports.income',
                    ],
                ],
            ],
            [
                'header' => 'SYSTEM',
                'items' => [
                    [
                        'label' => 'Profile',
                        'route' => 'profile.index',
                        'icon' => 'user-cog',
                        'activePattern' => 'profile.*',
                    ],
                    [
                        'label' => 'Staff Management',
                        'route' => 'users.index',
                        'icon' => 'user-plus',
                        'activePattern' => 'users.*',
                    ],
                    [
                        'label' => 'Roles',
                        'route' => 'roles.index',
                        'icon' => 'shield-check',
                        'activePattern' => 'roles.*',
                    ],
                    [
                        'label' => 'Currency Symbol',
                        'route' => 'currencies.index',
                        'icon' => 'banknote',
                        'activePattern' => 'currencies.*',
                    ],
                    [
                        'label' => 'Settings',
                        'route' => 'settings.index',
                        'icon' => 'settings',
                        'activePattern' => 'settings.*',
                    ],
                    [
                        'label' => 'Logout',
                        'route' => 'logout',
                        'icon' => 'log-out',
                        'class' => 'text-danger',
                        'special' => 'logout',
                        'activePattern' => '',
                    ],
                ],
            ],
        ];
    }
}
