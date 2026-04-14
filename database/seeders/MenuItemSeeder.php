<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;
use App\Models\Category;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuItems = [
            // 1. Soups & Hotpot
            ['category' => 'Soups & Hotpot (សម្ល និង ឆ្នាំងភ្លើង)', 'name' => 'Samlor Korko', 'khmer_name' => 'សម្លកកូរ', 'price' => 4.50, 'description' => 'A traditional Cambodian vegetable soup with fish.'],
            ['category' => 'Soups & Hotpot (សម្ល និង ឆ្នាំងភ្លើង)', 'name' => 'Samlor Machu Kroeung', 'khmer_name' => 'សម្លម្ជូរគ្រឿង', 'price' => 5.00, 'description' => 'Sour soup with beef and water spinach.'],
            ['category' => 'Soups & Hotpot (សម្ល និង ឆ្នាំងភ្លើង)', 'name' => 'Samlor Machu Yuon', 'khmer_name' => 'សម្លម្ជូរយួន', 'price' => 4.00, 'description' => 'Cambodian-Vietnamese style sour soup.'],
            ['category' => 'Soups & Hotpot (សម្ល និង ឆ្នាំងភ្លើង)', 'name' => 'Beef Hotpot Set', 'khmer_name' => 'ឈុតឆ្នាំងភ្លើងសាច់គោ', 'price' => 15.00, 'description' => 'Interactive hotpot with fresh beef and vegetables.'],
            ['category' => 'Soups & Hotpot (សម្ល និង ឆ្នាំងភ្លើង)', 'name' => 'Seafood Hotpot Set', 'khmer_name' => 'ឈុតឆ្នាំងភ្លើងគ្រឿងសមុទ្រ', 'price' => 18.00, 'description' => 'Interactive hotpot with mixed seafood.'],

            // 2. Khmer Noodles
            ['category' => 'Khmer Noodles (នំបញ្ចុក)', 'name' => 'Nom Banh Chok Samlor Khmer', 'khmer_name' => 'នំបញ្ចុកសម្លខ្មែរ', 'price' => 2.50, 'description' => 'Traditional rice noodles with fish gravy.'],
            ['category' => 'Khmer Noodles (នំបញ្ចុក)', 'name' => 'Nom Banh Chok Samlor Namya', 'khmer_name' => 'នំបញ្ចុកសម្លណាំយ៉ា', 'price' => 3.00, 'description' => 'Rice noodles with spicy fish gravy.'],
            ['category' => 'Khmer Noodles (នំបញ្ចុក)', 'name' => 'Nom Banh Chok Curry', 'khmer_name' => 'នំបញ្ចុកការី', 'price' => 3.50, 'description' => 'Rice noodles with red chicken curry.'],
            ['category' => 'Khmer Noodles (នំបញ្ចុក)', 'name' => 'Nom Banh Chok Fried', 'khmer_name' => 'នំបញ្ចុកឆា', 'price' => 3.00, 'description' => 'Stir-fried rice noodles with vegetables.'],
            ['category' => 'Khmer Noodles (នំបញ្ចុក)', 'name' => 'Nom Banh Chok with Fish Head', 'khmer_name' => 'នំបញ្ចុកក្បាលត្រី', 'price' => 4.50, 'description' => 'Traditional rice noodles served with fish head.'],

            // 3. Fried Rice & Noodles
            ['category' => 'Fried Rice & Noodles (បាយឆា និង មីឆា)', 'name' => 'Bai Cha (Cambodian Fried Rice)', 'khmer_name' => 'បាយឆាខ្មែរ', 'price' => 3.00, 'description' => 'Classic Khmer fried rice with egg and vegetables.'],
            ['category' => 'Fried Rice & Noodles (បាយឆា និង មីឆា)', 'name' => 'Mi Cha (Stir-fried Instant Noodles)', 'khmer_name' => 'មីឆា', 'price' => 2.50, 'description' => 'Stir-fried instant noodles with meat and vegetables.'],
            ['category' => 'Fried Rice & Noodles (បាយឆា និង មីឆា)', 'name' => 'Kuy Teav Cha', 'khmer_name' => 'គុយទាវឆា', 'price' => 3.50, 'description' => 'Stir-fried flat rice noodles.'],
            ['category' => 'Fried Rice & Noodles (បាយឆា និង មីឆា)', 'name' => 'Lort Cha', 'khmer_name' => 'លតឆា', 'price' => 3.00, 'description' => 'Stir-fried short fat noodles with bean sprouts and egg.'],
            ['category' => 'Fried Rice & Noodles (បាយឆា និង មីឆា)', 'name' => 'Seafood Fried Rice', 'khmer_name' => 'បាយឆាគ្រឿងសមុទ្រ', 'price' => 4.50, 'description' => 'Fried rice with mixed fresh seafood.'],

            // 4. Grilled & BBQ
            ['category' => 'Grilled & BBQ (សាច់អាំង)', 'name' => 'Grilled Pork with Rice (Bai Sach Chrouk)', 'khmer_name' => 'បាយសាច់ជ្រូក', 'price' => 2.50, 'description' => 'Classic Cambodian breakfast dish.'],
            ['category' => 'Grilled & BBQ (សាច់អាំង)', 'name' => 'Grilled Chicken', 'khmer_name' => 'សាច់មាន់អាំង', 'price' => 3.50, 'description' => 'Marinated charcoal-grilled chicken.'],
            ['category' => 'Grilled & BBQ (សាច់អាំង)', 'name' => 'Grilled Beef Skewers', 'khmer_name' => 'សាច់គោអាំង', 'price' => 1.50, 'description' => 'Beef skewers with lemongrass paste.'],
            ['category' => 'Grilled & BBQ (សាច់អាំង)', 'name' => 'Grilled Squid', 'khmer_name' => 'មឹកអាំង', 'price' => 5.00, 'description' => 'Fresh grilled squid with lime sauce.'],
            ['category' => 'Grilled & BBQ (សាច់អាំង)', 'name' => 'Grilled Fish with Salt', 'khmer_name' => 'ត្រីអាំងអំបិល', 'price' => 8.00, 'description' => 'Whole fish grilled with a salt crust.'],

            // 5. Seafood
            ['category' => 'Seafood (គ្រឿងសមុទ្រ)', 'name' => 'Kampot Pepper Crab', 'khmer_name' => 'ក្តាមលីងម្រេចកំពត', 'price' => 12.00, 'description' => 'Fresh crab stir-fried with world-famous Kampot pepper.'],
            ['category' => 'Seafood (គ្រឿងសមុទ្រ)', 'name' => 'Fried Shrimp with Tamarind', 'khmer_name' => 'បង្គាឆាអំពិលទុំ', 'price' => 7.50, 'description' => 'Sweet and sour shrimp with tamarind sauce.'],
            ['category' => 'Seafood (គ្រឿងសមុទ្រ)', 'name' => 'Steamed Squid with Lime', 'khmer_name' => 'មឹកចំហុយក្រូចឆ្មា', 'price' => 6.50, 'description' => 'Zesty steamed squid with garlic and chili.'],
            ['category' => 'Seafood (គ្រឿងសមុទ្រ)', 'name' => 'Fried Fish with Ginger', 'khmer_name' => 'ត្រីឆាខ្ញី', 'price' => 7.00, 'description' => 'Crispy fried fish topped with ginger and soy sauce.'],
            ['category' => 'Seafood (គ្រឿងសមុទ្រ)', 'name' => 'Seafood Platter', 'khmer_name' => 'គ្រឿងសមុទ្រប្លាតឺ', 'price' => 25.00, 'description' => 'A grand platter of grilled and steamed seafood.'],

            // 6. Stir-fried
            ['category' => 'Stir-fried (ឆា)', 'name' => 'Beef Lok Lak', 'khmer_name' => 'ឡុកឡាក់សាច់គោ', 'price' => 6.00, 'description' => 'Stir-fried diced beef served with lime and pepper sauce.'],
            ['category' => 'Stir-fried (ឆា)', 'name' => 'Stir-fried Ginger Chicken', 'khmer_name' => 'មាន់ឆាខ្ញី', 'price' => 4.50, 'description' => 'Classic stir-fried chicken with julienned ginger.'],
            ['category' => 'Stir-fried (ឆា)', 'name' => 'Stir-fried Morning Glory', 'khmer_name' => 'ឆាត្រកួន', 'price' => 3.00, 'description' => 'Fresh water spinach stir-fried with garlic.'],
            ['category' => 'Stir-fried (ឆា)', 'name' => 'Stir-fried Mixed Vegetables', 'khmer_name' => 'ឆាបន្លែចម្រុះ', 'price' => 3.50, 'description' => 'Variety of seasonal vegetables stir-fried.'],
            ['category' => 'Stir-fried (ឆា)', 'name' => 'Stir-fried Sweet and Sour', 'khmer_name' => 'ឆាជូរអែម', 'price' => 5.00, 'description' => 'Choice of meat with pineapple and cucumbers.'],

            // 7. Salads & Amok
            ['category' => 'Salads & Amok (ញាំ និង អាម៉ុក)', 'name' => 'Fish Amok', 'khmer_name' => 'អាម៉ុកត្រី', 'price' => 5.50, 'description' => 'Cambodia\'s national dish: fish mousse in coconut curry.'],
            ['category' => 'Salads & Amok (ញាំ និង អាម៉ុក)', 'name' => 'Banana Blossom Salad', 'khmer_name' => 'ញាំត្រយូងចេក', 'price' => 4.00, 'description' => 'Fresh salad with chicken and banana blossom.'],
            ['category' => 'Salads & Amok (ញាំ និង អាម៉ុក)', 'name' => 'Green Mango Salad with Smoked Fish', 'khmer_name' => 'ញាំស្វាយត្រីឆ្អើរ', 'price' => 4.50, 'description' => 'Spicy and sour mango salad with smoked fish.'],
            ['category' => 'Salads & Amok (ញាំ និង អាម៉ុក)', 'name' => 'Beef Salad (Pleah Sach Ko)', 'khmer_name' => 'ភ្លាសាច់គោ', 'price' => 6.50, 'description' => 'Lime-marinated beef salad with herbs.'],
            ['category' => 'Salads & Amok (ញាំ និង អាម៉ុក)', 'name' => 'Chicken Salad', 'khmer_name' => 'ញាំមាន់', 'price' => 4.00, 'description' => 'Shredded chicken with herbs and peanuts.'],

            // 8. Appetizers & Snacks
            ['category' => 'Appetizers & Snacks (អាហារសម្រន់)', 'name' => 'Deep Fried Spring Rolls', 'khmer_name' => 'ណែមចៀន', 'price' => 3.00, 'description' => 'Crispy spring rolls with meat and vegetables.'],
            ['category' => 'Appetizers & Snacks (អាហារសម្រន់)', 'name' => 'Fresh Spring Rolls', 'khmer_name' => 'ណែមឆៅ', 'price' => 2.50, 'description' => 'Healthy fresh vegetables and herbs wrapped in rice paper.'],
            ['category' => 'Appetizers & Snacks (អាហារសម្រន់)', 'name' => 'Fried Corn', 'khmer_name' => 'ពោតឆា', 'price' => 2.00, 'description' => 'Wok-fried sweet corn with green onions.'],
            ['category' => 'Appetizers & Snacks (អាហារសម្រន់)', 'name' => 'Fried Meatballs', 'khmer_name' => 'ប្រហិតចៀន', 'price' => 2.00, 'description' => 'Mixed fried meatballs with sweet chili sauce.'],
            ['category' => 'Appetizers & Snacks (អាហារសម្រន់)', 'name' => 'Crispy Shrimp Cakes', 'khmer_name' => 'នំបង្គា', 'price' => 3.50, 'description' => 'Homemade shrimp cakes fried to perfection.'],

            // 9. Desserts
            ['category' => 'Desserts (បង្អែម)', 'name' => 'Pumpkin Custard', 'khmer_name' => 'សង់ខ្យាល្ពៅ', 'price' => 2.00, 'description' => 'Traditional steamed pumpkin with egg custard.'],
            ['category' => 'Desserts (បង្អែម)', 'name' => 'Mung Bean Pudding', 'khmer_name' => 'បង្អែមសណ្តែកខៀវ', 'price' => 1.50, 'description' => 'Sweet mung bean soup with coconut milk.'],
            ['category' => 'Desserts (បង្អែម)', 'name' => 'Sticky Rice with Mango', 'khmer_name' => 'បាយដំណើបស្វាយ', 'price' => 3.00, 'description' => 'Fresh mango with sweet sticky rice.'],
            ['category' => 'Desserts (បង្អែម)', 'name' => 'Banana in Coconut Milk', 'khmer_name' => 'ចេកខ្ទិះ', 'price' => 1.50, 'description' => 'Sweetened cooked bananas in creamy coconut milk.'],
            ['category' => 'Desserts (បង្អែម)', 'name' => 'Mixed Fruit Dessert', 'khmer_name' => 'បង្អែមបផ្លែឈើ', 'price' => 2.50, 'description' => 'Assorted seasonal fruits in syrup and coconut milk.'],

            // 10. Fresh Juices & Coffee
            ['category' => 'Fresh Juices & Coffee (ទឹកផ្លែឈើ និង កាហ្វេ)', 'name' => 'Iced Coffee with Milk', 'khmer_name' => 'កាហ្វេទឹកដោះគោទឹកកក', 'price' => 1.50, 'description' => 'Traditional Cambodian style iced coffee.'],
            ['category' => 'Fresh Juices & Coffee (ទឹកផ្លែឈើ និង កាហ្វេ)', 'name' => 'Lime Juice', 'khmer_name' => 'ទឹកក្រូចឆ្មា', 'price' => 1.50, 'description' => 'Freshly squeezed lime juice with ice.'],
            ['category' => 'Fresh Juices & Coffee (ទឹកផ្លែឈើ និង កាហ្វេ)', 'name' => 'Passion Fruit Soda', 'khmer_name' => 'ផាសិនសូដា', 'price' => 2.00, 'description' => 'Refreshing passion fruit with sparkling water.'],
            ['category' => 'Fresh Juices & Coffee (ទឹកផ្លែឈើ និង កាហ្វេ)', 'name' => 'Coconut Juice', 'khmer_name' => 'ទឹកដូង', 'price' => 2.00, 'description' => 'Fresh whole coconut.'],
            ['category' => 'Fresh Juices & Coffee (ទឹកផ្លែឈើ និង កាហ្វេ)', 'name' => 'Sugar Cane Juice', 'khmer_name' => 'ទឹកអំពៅ', 'price' => 1.00, 'description' => 'Natural sugar cane juice extracted cold.'],
        ];

        foreach ($menuItems as $item) {
            $category = Category::where('name', $item['category'])->first();
            if ($category) {
                MenuItem::updateOrCreate(
                    ['name' => $item['name'] . ' (' . $item['khmer_name'] . ')'],
                    [
                        'category_id' => $category->id,
                        'name' => $item['name'] . ' (' . $item['khmer_name'] . ')',
                        'description' => $item['description'],
                        'price' => $item['price'],
                        'status' => 'available'
                    ]
                );
            }
        }
    }
}
