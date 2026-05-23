<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$translations = [
    'Checkout' => 'ទូទាត់ប្រាក់',
    'Back to POS' => 'ត្រឡប់ទៅ POS វិញ',
    'Point of Sale' => 'ចំណុចលក់ (POS)',
    'New Transaction' => 'ប្រតិបត្តិការថ្មី',
    'Modify Order' => 'កែប្រែការបញ្ជាទិញ',
    'Service' => 'សេវាកម្ម',
    'Table' => 'តុ',
    'Dine In' => 'ញ៉ាំនៅទីនេះ',
    'Takeaway' => 'ខ្ចប់',
    'All Items' => 'មុខម្ហូបទាំងអស់',
    'Search...' => 'ស្វែងរក...',
    'New Order' => 'ការបញ្ជាទិញថ្មី',
    'Draft' => 'ព្រាង',
    'Modification in progress' => 'កំពុងកែប្រែ',
    'New' => 'ថ្មី',
    'Start a fresh service' => 'ចាប់ផ្តើមសេវាកម្មថ្មី',
    'Current Order' => 'ការបញ្ជាទិញបច្ចុប្បន្ន',
    'Order Type' => 'ប្រភេទការបញ្ជាទិញ',
    'Customer Info' => 'ព័ត៌មានអតិថិជន',
    'Select Table (Required)' => 'ជ្រើសរើសតុ (ចាំបាច់)',
    'Select Customer (Optional)' => 'ជ្រើសរើសអតិថិជន (ជាជម្រើស)',
    'Walk-in Customer' => 'អតិថិជនទូទៅ',
    'Add Note' => 'បន្ថែមកំណត់ចំណាំ',
    'Special requests or notes...' => 'សំណើពិសេស ឬកំណត់ចំណាំ...',
    'Clear' => 'សម្អាត',
    'Save Later' => 'រក្សាទុកសិន',
    'Pay Now' => 'ទូទាត់ឥឡូវនេះ',
    'Total' => 'សរុប',
    'Subtotal' => 'សរុបរង',
    'Tax' => 'ពន្ធ',
    'Amount Paid' => 'ទឹកប្រាក់បានបង់',
    'Change Due' => 'ប្រាក់អាប់',
    'FINALIZE TRANSACTION' => 'បញ្ចប់ប្រតិបត្តិការ',
    'Payment Method' => 'វិធីសាស្ត្រទូទាត់',
    'Cash' => 'សាច់ប្រាក់',
    'Card' => 'កាត',
    'QR Pay' => 'ទូទាត់តាម QR',
    'Mobile Payment Info' => 'ព័ត៌មានការទូទាត់តាមទូរស័ព្ទ',
    'Customer account name' => 'ឈ្មោះគណនីអតិថិជន',
    'Phone number or account id' => 'លេខទូរស័ព្ទ ឬលេខគណនី',
    'Internal Order Notes' => 'កំណត់ចំណាំការបញ្ជាទិញ',
    'Your cart is empty' => 'កន្ត្រករបស់អ្នកទទេ',
    'Search items...' => 'ស្វែងរកមុខម្ហូប...',
    'Loading...' => 'កំពុងផ្ទុក...',
];

foreach ($translations as $key => $kh) {
    \DB::table('translations')->updateOrInsert(
        ['key' => $key],
        ['kh' => $kh, 'en' => $key, 'group' => 'general']
    );
}

echo "POS Translations added!\n";
