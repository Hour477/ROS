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
        $isCashier = $user && $user->role && $user->role->slug === 'cashier';
        $isKitchen = $user && $user->role && $user->role->slug === 'kitchen';
        $isStaff = $isAdmin || $isCashier;

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
                'visible' => $isAdmin || $isCashier,
                'items' => [
                    [
                        'label' => 'Categories',
                        'route' => 'categories.index',
                        'icon' => 'grid',
                        'activePattern' => 'categories.*',
                        'visible' => $isAdmin,
                    ],
                    [
                        'label' => 'Menu Items',
                        'route' => 'menu.index',
                        'icon' => 'utensils-crossed',
                        'activePattern' => 'menu.*',
                        'visible' => $isAdmin,
                    ],
                    [
                        'label' => 'Tables',
                        'route' => 'tables.index',
                        'icon' => 'table',
                        'activePattern' => 'tables.*',
                        'visible' => true, // Accessible by both
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
                        'visible' => $isStaff,
                    ],
                    [
                        'label' => 'Payments',
                        'route' => 'payments.index',
                        'icon' => 'banknote',
                        'activePattern' => 'payments.*',
                        'visible' => $isStaff,
                    ],
                    [
                        'label' => 'Kitchen KDS',
                        'route' => 'kitchen.index',
                        'icon' => 'flame',
                        'activePattern' => 'kitchen.*',
                        'visible' => true, // Everyone can see
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
                        'visible' => $isAdmin,
                    ],
                    [
                        'label' => 'Roles',
                        'route' => 'roles.index',
                        'icon' => 'shield-check',
                        'activePattern' => 'roles.*',
                        'visible' => $isAdmin,
                    ],
                    [
                        'label' => 'Currency Symbol',
                        'route' => 'currencies.index',
                        'icon' => 'banknote',
                        'activePattern' => 'currencies.*',
                        'visible' => $isAdmin,
                    ],
                    [
                        'label' => 'Translations',
                        'route' => 'translations.index',
                        'icon' => 'languages',
                        'activePattern' => 'translations.*',
                        'visible' => $isAdmin,
                    ],
                    [
                        'label' => 'Settings',
                        'route' => 'settings.index',
                        'icon' => 'settings',
                        'activePattern' => 'settings.*',
                        'visible' => $isAdmin,
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
