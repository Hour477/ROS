<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Soups & Hotpot (សម្ល និង ឆ្នាំងភ្លើង)',
                'description' => 'Traditional Cambodian soups and interactive hotpot sets.',
                'status' => 1,
            ],
            [
                'name' => 'Khmer Noodles (នំបញ្ចុក)',
                'description' => 'Fresh rice noodles with various traditional gravies and fresh herbs.',
                'status' => 1,
            ],
            [
                'name' => 'Fried Rice & Noodles (បាយឆា និង មីឆា)',
                'description' => 'A variety of wok-fried rice and noodle dishes.',
                'status' => 1,
            ],
            [
                'name' => 'Grilled & BBQ (សាច់អាំង)',
                'description' => 'Charcoal-grilled meats and street-style BBQ favorites.',
                'status' => 1,
            ],
            [
                'name' => 'Seafood (គ្រឿងសមុទ្រ)',
                'description' => 'Fresh catch from the, prepared Cambodian style.',
                'status' => 1,
            ],
            [
                'name' => 'Stir-fried (ឆា)',
                'description' => 'Classic Khmer stir-fries including Lok Lak and Ginger Chicken.',
                'status' => 1,
            ],
            [
                'name' => 'Salads & Amok (ញាំ និង អាម៉ុក)',
                'description' => 'Fresh Khmer salads and the national dish, Fish Amok.',
                'status' => 1,
            ],
            [
                'name' => 'Appetizers & Snacks (អាហារសម្រន់)',
                'description' => 'Crispy spring rolls, fried corn, and traditional snacks.',
                'status' => 1,
            ],
            [
                'name' => 'Desserts (បង្អែម)',
                'description' => 'Sweet Khmer treats with coconut milk and seasonal fruits.',
                'status' => 1,
            ],
            [
                'name' => 'Fresh Juices & Coffee (ទឹកផ្លែឈើ និង កាហ្វេ)',
                'description' => 'Natural fruit shakes and traditional Iced Coffee with milk.',
                'status' => 1,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['name' => $category['name']], $category);
        }
    }
}
