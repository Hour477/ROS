<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$translations = [
    'New Category' => 'ចំណាត់ថ្នាក់ក្រុមថ្មី',
    'Define a new structural group for your restaurant menu' => 'កំណត់ក្រុមរចនាសម្ព័ន្ធថ្មីសម្រាប់បញ្ជីមុខម្ហូបភោជនីយដ្ឋានរបស់អ្នក',
    'Back to List' => 'ត្រឡប់ទៅកាន់បញ្ជី',
    'Back' => 'ត្រឡប់ក្រោយ',
    'Category Details' => 'ព័ត៌មានលម្អិតចំណាត់ថ្នាក់ក្រុម',
    'Category Name' => 'ឈ្មោះចំណាត់ថ្នាក់ក្រុម',
    'e.g. Italian Specialties' => 'ឧ. មុខម្ហូបពិសេសអ៊ីតាលី',
    'Description' => 'ការពណ៌នា',
    'Briefly describe what items fall under this category...' => 'ពណ៌នាដោយសង្ខេបនូវមុខម្ហូបដែលស្ថិតនៅក្រោមចំណាត់ថ្នាក់ក្រុមនេះ...',
    'Create Category' => 'បង្កើតចំណាត់ថ្នាក់ក្រុម',
    'Cancel' => 'បោះបង់',
    'Visibility' => 'ភាពមើលឃើញ',
    'Visible on Menu' => 'អាចមើលឃើញក្នុងបញ្ជីម្ហូប',
    'Active & Visible' => 'សកម្ម និងអាចមើលឃើញ',
    'Hidden / Disabled' => 'លាក់ / បិទ',
    'Items in a disabled category will be hidden from the menu grid.' => 'មុខម្ហូបនៅក្នុងចំណាត់ថ្នាក់ក្រុមដែលបានបិទ នឹងត្រូវបានលាក់ពីបញ្ជីមុខម្ហូប។',
    'Edit Category' => 'កែសម្រួលចំណាត់ថ្នាក់ក្រុម',
    'Updating structural metadata for organizational unit' => 'ធ្វើបច្ចុប្បន្នភាពទិន្នន័យរចនាសម្ព័ន្ធសម្រាប់អង្គភាព',
    'Update Category' => 'ធ្វើបច្ចុប្បន្នភាពចំណាត់ថ្នាក់ក្រុម',
    'Discard Changes' => 'បោះបង់ការផ្លាស់ប្តូរ',
    'Categories' => 'ប្រភេទ',
    'Total Categories' => 'ចំនួនប្រភេទសរុប',
    'Active' => 'សកម្ម',
    'Disabled' => 'បិទ',
    'Total Items' => 'មុខម្ហូបសរុប',
    'Category Management' => 'ការគ្រប់គ្រងចំណាត់ថ្នាក់ក្រុម',
    'Organize your menu items into structured groups' => 'រៀបចំមុខម្ហូបរបស់អ្នកទៅជាក្រុមមានរចនាសម្ព័ន្ធ',
    'Add Category' => 'បន្ថែមចំណាត់ថ្នាក់ក្រុម',
    'Search category name...' => 'ស្វែងរកឈ្មោះចំណាត់ថ្នាក់ក្រុម...',
    '#' => 'ល.រ',
    'Category' => 'ប្រភេទ',
    'Items' => 'ចំនួនម្ហូប',
    'Status' => 'ស្ថានភាព',
    'Actions' => 'សកម្មភាព',
    'No description' => 'មិនមានការពណ៌នា',
    'No categories found' => 'រកមិនឃើញចំណាត់ថ្នាក់ក្រុមទេ',
    'Create your first category to start organizing the menu.' => 'បង្កើតចំណាត់ថ្នាក់ក្រុមដំបូងរបស់អ្នក ដើម្បីចាប់ផ្តើមរៀបចំបញ្ជីមុខម្ហូប។'
];

foreach ($translations as $key => $kh) {
    \DB::table('translations')->updateOrInsert(
        ['key' => $key],
        ['kh' => $kh, 'en' => $key, 'group' => 'general']
    );
}

// Rebuild JSON cache for Khmer
$allTranslations = \DB::table('translations')->get();
$dataKh = [];
foreach ($allTranslations as $t) {
    $val = $t->kh ?: $t->en;
    if ($val) $dataKh[$t->key] = $val;
}
file_put_contents(lang_path('kh.json'), json_encode($dataKh, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

\Cache::forget('lang_sync_en');
\Cache::forget('lang_sync_kh');

echo "Categories translations added and cache rebuilt!\n";
