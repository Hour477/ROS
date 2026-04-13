<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Translation;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            // Sidebars & Headers
            ['group' => 'general', 'key' => 'Dashboard', 'en' => 'Dashboard', 'kh' => 'ផ្ទាំងគ្រប់គ្រង'],
            ['group' => 'general', 'key' => 'Dashboard Overview', 'en' => 'Dashboard Overview', 'kh' => 'ទិដ្ឋភាពទូទៅនៃផ្ទាំងគ្រប់គ្រង'],
            ['group' => 'general', 'key' => 'Categories', 'en' => 'Categories', 'kh' => 'ប្រភេទ'],
            ['group' => 'general', 'key' => 'Menu Items', 'en' => 'Menu Items', 'kh' => 'មុខម្ហូប'],
            ['group' => 'general', 'key' => 'Tables', 'en' => 'Tables', 'kh' => 'តារាងតុ'],
            ['group' => 'general', 'key' => 'Orders', 'en' => 'Orders', 'kh' => 'ការបញ្ជាទិញ'],
            ['group' => 'general', 'key' => 'Payments', 'en' => 'Payments', 'kh' => 'ការបង់ប្រាក់'],
            ['group' => 'general', 'key' => 'Kitchen KDS', 'en' => 'Kitchen KDS', 'kh' => 'ផ្ទះបាយ'],
            ['group' => 'general', 'key' => 'Income Report', 'en' => 'Income Report', 'kh' => 'របាយការណ៍ចំណូល'],
            ['group' => 'general', 'key' => 'Profile', 'en' => 'Profile', 'kh' => 'ប្រវត្តិរូប'],
            ['group' => 'general', 'key' => 'Staff Management', 'en' => 'Staff Management', 'kh' => 'ការគ្រប់គ្រងបុគ្គលិក'],
            ['group' => 'general', 'key' => 'Roles', 'en' => 'Roles', 'kh' => 'តួនាទី'],
            ['group' => 'general', 'key' => 'Currency Symbol', 'en' => 'Currency Symbol', 'kh' => 'រូបិយប័ណ្ណ'],
            ['group' => 'general', 'key' => 'Translations', 'en' => 'Translations', 'kh' => 'ការបកប្រែ'],
            ['group' => 'general', 'key' => 'Settings', 'en' => 'Settings', 'kh' => 'ការកំណត់'],
            ['group' => 'general', 'key' => 'Logout', 'en' => 'Logout', 'kh' => 'ចាកចេញ'],

            // Legacy keys used in some views
            ['group' => 'general', 'key' => 'Orders History', 'en' => 'Orders History', 'kh' => 'ប្រវត្តិនៃការបញ្ជាទិញ'],
            ['group' => 'general', 'key' => 'Payments History', 'en' => 'Payments History', 'kh' => 'ប្រវត្តិនៃការបង់ប្រាក់'],
            ['group' => 'general', 'key' => 'Tables Management', 'en' => 'Tables Management', 'kh' => 'ការគ្រប់គ្រងតុ'],

            // Section Headers
            ['group' => 'general', 'key' => 'MAIN', 'en' => 'MAIN', 'kh' => 'មេ'],
            ['group' => 'general', 'key' => 'MANAGEMENT', 'en' => 'MANAGEMENT', 'kh' => 'ការគ្រប់គ្រង'],
            ['group' => 'general', 'key' => 'SALES & ORDERS', 'en' => 'SALES & ORDERS', 'kh' => 'ការលក់ និងការបញ្ជាទិញ'],
            ['group' => 'general', 'key' => 'REPORTS', 'en' => 'REPORTS', 'kh' => 'របាយការណ៍'],
            ['group' => 'general', 'key' => 'SYSTEM', 'en' => 'SYSTEM', 'kh' => 'ប្រព័ន្ធ'],

            // Table Page
            ['group' => 'pos', 'key' => 'Table', 'en' => 'Table', 'kh' => 'តុ'],
            ['group' => 'pos', 'key' => 'Tables', 'en' => 'Tables', 'kh' => 'តារាងតុ'],
            ['group' => 'pos', 'key' => 'Table Management', 'en' => 'Table Management', 'kh' => 'ការគ្រប់គ្រងតុ'],
            ['group' => 'pos', 'key' => 'Table Assignment', 'en' => 'Table Assignment', 'kh' => 'ការកំណត់តុ'],
            ['group' => 'pos', 'key' => 'Capacity', 'en' => 'Capacity', 'kh' => 'ចំណុះ'],
            ['group' => 'pos', 'key' => 'Status', 'en' => 'Status', 'kh' => 'ស្ថានភាព'],
            ['group' => 'pos', 'key' => 'Action', 'en' => 'Action', 'kh' => 'សកម្មភាព'],
            ['group' => 'pos', 'key' => 'Name', 'en' => 'Name', 'kh' => 'ឈ្មោះ'],
            ['group' => 'pos', 'key' => 'Actions', 'en' => 'Actions', 'kh' => 'សកម្មភាព'],
            ['group' => 'pos', 'key' => 'Add New Table', 'en' => 'Add New Table', 'kh' => 'បន្ថែមតុថ្មី'],
            ['group' => 'pos', 'key' => 'Search by table name...', 'en' => 'Search by table name...', 'kh' => 'ស្វែងរកតាមឈ្មោះតុ...'],
            ['group' => 'pos', 'key' => 'All Statuses', 'en' => 'All Statuses', 'kh' => 'ស្ថានភាពទាំងអស់'],
            ['group' => 'pos', 'key' => 'Available', 'en' => 'Available', 'kh' => 'ទំនេរ'],
            ['group' => 'pos', 'key' => 'Occupied', 'en' => 'Occupied', 'kh' => 'មានភ្ញៀវ'],
            ['group' => 'pos', 'key' => 'Reserved', 'en' => 'Reserved', 'kh' => 'បានកក់'],
            ['group' => 'pos', 'key' => 'Persons', 'en' => 'Persons', 'kh' => 'នាក់'],
            ['group' => 'pos', 'key' => 'Organize your dining area and track occupancy', 'en' => 'Organize your dining area and track occupancy', 'kh' => 'រៀបចំតំបន់ទទួលទានអាហាររបស់អ្នក និងតាមដានការប្រើប្រាស់តុ'],

            // General UI
            ['group' => 'general', 'key' => 'Point of Sale', 'en' => 'Point of Sale', 'kh' => 'ចំណុចលក់ (POS)'],
            ['group' => 'general', 'key' => 'System Settings', 'en' => 'System Settings', 'kh' => 'ការកំណត់ប្រព័ន្ធ'],
            ['group' => 'general', 'key' => 'Admin Dashboard', 'en' => 'Admin Dashboard', 'kh' => 'ផ្ទាំងគ្រប់គ្រង'],
            ['group' => 'general', 'key' => 'Welcome back', 'en' => 'Welcome back', 'kh' => 'សូមស្វាគមន៍មកវិញ'],
            ['group' => 'general', 'key' => 'Managing Service for', 'en' => 'Managing Service for', 'kh' => 'ការគ្រប់គ្រងសេវាកម្មសម្រាប់'],
            ['group' => 'general', 'key' => 'New Order', 'en' => 'New Order', 'kh' => 'ការកុម្ម៉ង់ថ្មី'],
        ];

        foreach ($translations as $data) {
            Translation::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}
