<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Translation;

class MissingTranslationsSeeder extends Seeder
{
    /**
     * Add all missing translations found by scanning blade files.
     * Only inserts records that do not already exist (safe to re-run).
     */
    public function run(): void
    {
        $translations = [
            // ── Backup / System ───────────────────────────────────────────
            ['group' => 'general', 'key' => 'System Backups',           'en' => 'System Backups',           'kh' => 'ការបម្រុងទុកប្រព័ន្ធ'],
            ['group' => 'general', 'key' => 'Automated Backup Scheduler','en' => 'Automated Backup Scheduler','kh' => 'កំណត់ពេលបម្រុងទុកស្វ័យប្រវត្តិ'],
            ['group' => 'general', 'key' => 'Enable Automated Backups',  'en' => 'Enable Automated Backups',  'kh' => 'បើករការបម្រុងទុកស្វ័យប្រវត្តិ'],
            ['group' => 'general', 'key' => 'Run daily database backup automatically', 'en' => 'Run daily database backup automatically', 'kh' => 'ដំណើរការបម្រុងទុកប្រចាំថ្ងៃដោយស្វ័យប្រវត្តិ'],
            ['group' => 'general', 'key' => 'Daily Trigger Time',        'en' => 'Daily Trigger Time',        'kh' => 'ម៉ោងបម្រុងទុកប្រចាំថ្ងៃ'],
            ['group' => 'general', 'key' => 'Runs daily at the specified time using Laravel\'s schedule command.', 'en' => 'Runs daily at the specified time using Laravel\'s schedule command.', 'kh' => 'ដំណើរការប្រចាំថ្ងៃតាមម៉ោងដែលបានកំណត់ដោយប្រើប្រាស់ពាក្យបញ្ជាកំណត់ពេលរបស់ Laravel។'],
            ['group' => 'general', 'key' => 'Backup Destination Folder Path', 'en' => 'Backup Destination Folder Path', 'kh' => 'ទីតាំងថតដែលរក្សាទុកការបម្រុង'],
            ['group' => 'general', 'key' => 'Absolute folder path where backups will be saved. Click Browse... to pick or create a folder, or leave empty to use default storage folder.', 'en' => 'Absolute folder path where backups will be saved.', 'kh' => 'ផ្លូវថតដោយផ្ទាល់ដែលការបម្រុងទុកនឹងត្រូវបានរក្សា។ ចុច Browse... ដើម្បីជ្រើស ឬបង្កើតថត ឬទុកចោលដើម្បីប្រើថតផ្ទុកលំនាំដើម។'],
            ['group' => 'general', 'key' => 'Active Schedule',           'en' => 'Active Schedule',           'kh' => 'កំណត់ពេលសកម្ម'],
            ['group' => 'general', 'key' => 'Disabled',                  'en' => 'Disabled',                  'kh' => 'បិទ'],
            ['group' => 'general', 'key' => 'Last Backup:',              'en' => 'Last Backup:',              'kh' => 'ការបម្រុងទុកចុងក្រោយ:'],
            ['group' => 'general', 'key' => 'No backup log found',       'en' => 'No backup log found',       'kh' => 'រកមិនឃើញកំណត់ហេតុការបម្រុងទុកទេ'],
            ['group' => 'general', 'key' => 'Save Scheduler Settings',   'en' => 'Save Scheduler Settings',   'kh' => 'រក្សាទុកការកំណត់'],
            ['group' => 'general', 'key' => 'Windows Task Scheduler Integration', 'en' => 'Windows Task Scheduler Integration', 'kh' => 'ការរួមបញ្ចូល Windows Task Scheduler'],
            ['group' => 'general', 'key' => 'To make this scheduler work automatically in the background on your Windows Server or PC, you must add a single task to the Windows Task Scheduler that executes Laravel\'s command scheduler every minute.', 'en' => 'To make this scheduler work automatically, add a task to Windows Task Scheduler.', 'kh' => 'ដើម្បីឱ្យកំណត់ពេលនេះដំណើរការស្វ័យប្រវត្តិ សូមបន្ថែមភារកិច្ចទៅ Windows Task Scheduler ដើម្បីដំណើរការរៀងរាល់នាទី។'],
            ['group' => 'general', 'key' => 'Under Actions tab, select ', 'en' => 'Under Actions tab, select ', 'kh' => 'នៅក្នុងផ្ទាំង Actions ជ្រើស '],
            ['group' => 'general', 'key' => 'When I log on',             'en' => 'When I log on',             'kh' => 'នៅពេលខ្ញុំចូលប្រព័ន្ធ'],
            ['group' => 'general', 'key' => 'Browse...',                 'en' => 'Browse...',                 'kh' => 'រកមើល...'],
            ['group' => 'general', 'key' => 'Create Backup Now',         'en' => 'Create Backup Now',         'kh' => 'បង្កើតការបម្រុងទុកឥឡូវ'],
            ['group' => 'general', 'key' => 'Download',                  'en' => 'Download',                  'kh' => 'ទាញយក'],
            ['group' => 'general', 'key' => 'Delete',                    'en' => 'Delete',                    'kh' => 'លុប'],
            ['group' => 'general', 'key' => 'No backups found.',         'en' => 'No backups found.',         'kh' => 'រកមិនឃើញការបម្រុងទុកទេ។'],

            // ── Dashboard ─────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'Welcome back',             'en' => 'Welcome back',             'kh' => 'សូមស្វាគមន៍ការ귀ត្រឡប់'],
            ['group' => 'general', 'key' => 'Today\'s Income',          'en' => 'Today\'s Income',          'kh' => 'ចំណូលថ្ងៃនេះ'],
            ['group' => 'general', 'key' => 'Total Orders',             'en' => 'Total Orders',             'kh' => 'ការបញ្ជាទិញសរុប'],
            ['group' => 'general', 'key' => 'Total Items',              'en' => 'Total Items',              'kh' => 'មុខទំនិញសរុប'],
            ['group' => 'general', 'key' => 'Total Categories',         'en' => 'Total Categories',         'kh' => 'ប្រភេទសរុប'],
            ['group' => 'general', 'key' => 'View All',                 'en' => 'View All',                 'kh' => 'មើលទាំងអស់'],
            ['group' => 'general', 'key' => 'View',                     'en' => 'View',                     'kh' => 'មើល'],
            ['group' => 'general', 'key' => 'View Order',               'en' => 'View Order',               'kh' => 'មើលការបញ្ជាទិញ'],
            ['group' => 'general', 'key' => 'View Order #',             'en' => 'View Order #',             'kh' => 'មើលការបញ្ជាទិញ #'],

            // ── Orders & Status ────────────────────────────────────────────
            ['group' => 'general', 'key' => 'UNPAID',                   'en' => 'UNPAID',                   'kh' => 'មិនទាន់បង់'],
            ['group' => 'general', 'key' => 'Pending',                  'en' => 'Pending',                  'kh' => 'កំពុងរង់ចាំ'],
            ['group' => 'general', 'key' => 'Completed',                'en' => 'Completed',                'kh' => 'បានបញ្ចប់'],
            ['group' => 'general', 'key' => 'Void',                     'en' => 'Void',                     'kh' => 'មោឃៈ'],
            ['group' => 'general', 'key' => 'Type',                     'en' => 'Type',                     'kh' => 'ប្រភេទ'],
            ['group' => 'general', 'key' => 'Type / Table',             'en' => 'Type / Table',             'kh' => 'ប្រភេទ / តុ'],
            ['group' => 'general', 'key' => 'Time',                     'en' => 'Time',                     'kh' => 'ម៉ោង'],
            ['group' => 'general', 'key' => 'Table',                    'en' => 'Table',                    'kh' => 'តុ'],
            ['group' => 'general', 'key' => 'Table #',                  'en' => 'Table #',                  'kh' => 'តុ #'],
            ['group' => 'general', 'key' => 'Table Details',            'en' => 'Table Details',            'kh' => 'ព័ត៌មានលម្អិតអំពីតុ'],
            ['group' => 'general', 'key' => 'Table Information',        'en' => 'Table Information',        'kh' => 'ព័ត៌មានតុ'],
            ['group' => 'general', 'key' => 'Table Name / Number',      'en' => 'Table Name / Number',      'kh' => 'ឈ្មោះ / លេខតុ'],
            ['group' => 'general', 'key' => 'Taken',                    'en' => 'Taken',                    'kh' => 'កំពុងប្រើ'],
            ['group' => 'general', 'key' => 'Unavailable',              'en' => 'Unavailable',              'kh' => 'មិនអាចរកបាន'],
            ['group' => 'general', 'key' => 'Your cart is empty.',      'en' => 'Your cart is empty.',      'kh' => 'កន្ត្រករបស់អ្នកទំនេរ។'],
            ['group' => 'general', 'key' => 'Viewing details for',      'en' => 'Viewing details for',      'kh' => 'មើលព័ត៌មានលម្អិតសម្រាប់'],
            ['group' => 'general', 'key' => 'Viewing',                  'en' => 'Viewing',                  'kh' => 'កំពុងមើល'],
            ['group' => 'general', 'key' => 'Updating records for',     'en' => 'Updating records for',     'kh' => 'ធ្វើបច្ចុប្បន្នភាពកំណត់ត្រាសម្រាប់'],
            ['group' => 'general', 'key' => 'This action cannot be reversed.', 'en' => 'This action cannot be reversed.', 'kh' => 'សកម្មភាពនេះមិនអាចត្រឡប់ក្រោយបានទេ។'],

            // ── Customers ─────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'Customer Management',      'en' => 'Customer Management',      'kh' => 'ការគ្រប់គ្រងអតិថិជន'],
            ['group' => 'general', 'key' => 'New Customer',             'en' => 'New Customer',             'kh' => 'អតិថិជនថ្មី'],
            ['group' => 'general', 'key' => 'Edit Customer',            'en' => 'Edit Customer',            'kh' => 'កែសម្រួលអតិថិជន'],
            ['group' => 'general', 'key' => 'Customer Details',         'en' => 'Customer Details',         'kh' => 'ព័ត៌មានអតិថិជន'],
            ['group' => 'general', 'key' => 'Walk-in Customer',         'en' => 'Walk-in Customer',         'kh' => 'អតិថិជនដើរចូល'],
            ['group' => 'general', 'key' => 'Update Customer',          'en' => 'Update Customer',          'kh' => 'ធ្វើបច្ចុប្បន្នភាពអតិថិជន'],
            ['group' => 'general', 'key' => 'Total Spent',              'en' => 'Total Spent',              'kh' => 'ចំនួនប្រាក់ដែលបានចំណាយ'],
            ['group' => 'general', 'key' => 'Phone',                    'en' => 'Phone',                    'kh' => 'ទូរស័ព្ទ'],
            ['group' => 'general', 'key' => 'Email',                    'en' => 'Email',                    'kh' => 'អ៊ីមែល'],
            ['group' => 'general', 'key' => 'Address',                  'en' => 'Address',                  'kh' => 'អាសយដ្ឋាន'],
            ['group' => 'general', 'key' => 'Street Address',           'en' => 'Street Address',           'kh' => 'អាសយដ្ឋានផ្លូវ'],
            ['group' => 'general', 'key' => 'customer@email.com',       'en' => 'customer@email.com',       'kh' => 'customer@email.com'],
            ['group' => 'general', 'key' => 'your@email.com',           'en' => 'your@email.com',           'kh' => 'your@email.com'],
            ['group' => 'general', 'key' => 'email@restaurant.com',     'en' => 'email@restaurant.com',     'kh' => 'email@restaurant.com'],

            // ── Users & Roles ─────────────────────────────────────────────
            ['group' => 'general', 'key' => 'User Management',          'en' => 'User Management',          'kh' => 'ការគ្រប់គ្រងអ្នកប្រើ'],
            ['group' => 'general', 'key' => 'New Staff',                'en' => 'New Staff',                'kh' => 'បុគ្គលិកថ្មី'],
            ['group' => 'general', 'key' => 'Edit Staff',               'en' => 'Edit Staff',               'kh' => 'កែសម្រួលបុគ្គលិក'],
            ['group' => 'general', 'key' => 'Role',                     'en' => 'Role',                     'kh' => 'តួនាទី'],
            ['group' => 'general', 'key' => 'Password',                 'en' => 'Password',                 'kh' => 'ពាក្យសម្ងាត់'],
            ['group' => 'general', 'key' => 'Update Password',          'en' => 'Update Password',          'kh' => 'ធ្វើបច្ចុប្បន្នភាពពាក្យសម្ងាត់'],
            ['group' => 'general', 'key' => 'Update Account',           'en' => 'Update Account',           'kh' => 'ធ្វើបច្ចុប្បន្នភាពគណនី'],
            ['group' => 'general', 'key' => 'Upload Photo',             'en' => 'Upload Photo',             'kh' => 'បង្ហោះរូបថត'],
            ['group' => 'general', 'key' => 'Verify Email',             'en' => 'Verify Email',             'kh' => 'ផ្ទៀងផ្ទាត់អ៊ីមែល'],
            ['group' => 'general', 'key' => 'e.g. Admin, Chef, Cashier','en' => 'e.g. Admin, Chef, Cashier','kh' => 'ឧ. អ្នកគ្រប់គ្រង, ចុងភៅ, អ្នកគិតប្រាក់'],
            ['group' => 'general', 'key' => 'Update Role',              'en' => 'Update Role',              'kh' => 'ធ្វើបច្ចុប្បន្នភាពតួនាទី'],
            ['group' => 'general', 'key' => 'Permissions',              'en' => 'Permissions',              'kh' => 'សិទ្ធិ'],

            // ── Settings ──────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'System',                   'en' => 'System',                   'kh' => 'ប្រព័ន្ធ'],
            ['group' => 'general', 'key' => 'System Logo',              'en' => 'System Logo',              'kh' => 'និមិត្តសញ្ញាប្រព័ន្ធ'],
            ['group' => 'general', 'key' => 'Visual Identity',          'en' => 'Visual Identity',          'kh' => 'អត្តសញ្ញាណមើលឃើញ'],
            ['group' => 'general', 'key' => 'Restaurant Name',          'en' => 'Restaurant Name',          'kh' => 'ឈ្មោះភោជនីយដ្ឋាន'],
            ['group' => 'general', 'key' => 'e.g. Gourmet Palace',      'en' => 'e.g. Gourmet Palace',      'kh' => 'ឧ. Gourmet Palace'],
            ['group' => 'general', 'key' => 'Used in invoices and dashboard', 'en' => 'Used in invoices and dashboard', 'kh' => 'ប្រើក្នុងវិក្កយបត្រ និងផ្ទាំងគ្រប់គ្រង'],
            ['group' => 'general', 'key' => 'Tax Percentage (%)',        'en' => 'Tax Percentage (%)',        'kh' => 'អត្រាពន្ធ (%)'],

            // ── Currency ──────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'Currency',                 'en' => 'Currency',                 'kh' => 'រូបិយប័ណ្ណ'],
            ['group' => 'general', 'key' => 'Currency Name',            'en' => 'Currency Name',            'kh' => 'ឈ្មោះរូបិយប័ណ្ណ'],
            ['group' => 'general', 'key' => 'Symbol',                   'en' => 'Symbol',                   'kh' => 'និមិត្តសញ្ញា'],
            ['group' => 'general', 'key' => 'Update Currency',          'en' => 'Update Currency',          'kh' => 'ធ្វើបច្ចុប្បន្នភាពរូបិយប័ណ្ណ'],
            ['group' => 'general', 'key' => 'e.g. $, ៛',               'en' => 'e.g. $, ៛',               'kh' => 'ឧ. $, ៛'],
            ['group' => 'general', 'key' => 'e.g. US Dollar, Cambodian Riel', 'en' => 'e.g. US Dollar, Cambodian Riel', 'kh' => 'ឧ. ដុល្លារអាមេរិក, រៀលខ្មែរ'],

            // ── Translations ──────────────────────────────────────────────
            ['group' => 'general', 'key' => 'Translation Key',          'en' => 'Translation Key',          'kh' => 'គន្លឹះការបកប្រែ'],
            ['group' => 'general', 'key' => 'Update Translation',       'en' => 'Update Translation',       'kh' => 'ធ្វើបច្ចុប្បន្នភាពការបកប្រែ'],
            ['group' => 'general', 'key' => 'e.g. welcome_message',     'en' => 'e.g. welcome_message',     'kh' => 'ឧ. welcome_message'],

            // ── Profile ───────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'My Account',               'en' => 'My Account',               'kh' => 'គណនីរបស់ខ្ញុំ'],
            ['group' => 'general', 'key' => 'Account Settings',         'en' => 'Account Settings',         'kh' => 'ការកំណត់គណនី'],
            ['group' => 'general', 'key' => 'Full Name',                'en' => 'Full Name',                'kh' => 'ឈ្មោះពេញ'],
            ['group' => 'general', 'key' => 'Current Password',         'en' => 'Current Password',         'kh' => 'ពាក្យសម្ងាត់បច្ចុប្បន្ន'],
            ['group' => 'general', 'key' => 'New Password',             'en' => 'New Password',             'kh' => 'ពាក្យសម្ងាត់ថ្មី'],
            ['group' => 'general', 'key' => 'Confirm Password',         'en' => 'Confirm Password',         'kh' => 'បញ្ជាក់ពាក្យសម្ងាត់'],

            // ── Pagination ────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'of',                       'en' => 'of',                       'kh' => 'នៃ'],
            ['group' => 'general', 'key' => 'to',                       'en' => 'to',                       'kh' => 'ដល់'],
            ['group' => 'general', 'key' => 'items',                    'en' => 'items',                    'kh' => 'ធាតុ'],
            ['group' => 'general', 'key' => 'results',                  'en' => 'results',                  'kh' => 'លទ្ធផល'],
            ['group' => 'general', 'key' => 'Viewing',                  'en' => 'Viewing',                  'kh' => 'កំពុងមើល'],

            // ── Menu / Item placeholders ───────────────────────────────────
            ['group' => 'general', 'key' => 'e.g. Grilled Salmon',      'en' => 'e.g. Grilled Salmon',      'kh' => 'ឧ. ត្រីសាម៉ុនអាំង'],
            ['group' => 'general', 'key' => 'e.g. Italian Specialties', 'en' => 'e.g. Italian Specialties', 'kh' => 'ឧ. ម្ហូបពិសេសអ៊ីតាលី'],

            // ── Table Placeholders ────────────────────────────────────────
            ['group' => 'general', 'key' => 'e.g. VIP-01',             'en' => 'e.g. VIP-01',             'kh' => 'ឧ. VIP-01'],
            ['group' => 'general', 'key' => 'e.g. VIP-01 or Table 12', 'en' => 'e.g. VIP-01 or Table 12', 'kh' => 'ឧ. VIP-01 ឬ Table 12'],

            // ── Filters & Actions ─────────────────────────────────────────
            ['group' => 'general', 'key' => 'Search...',                'en' => 'Search...',                'kh' => 'ស្វែងរក...'],
            ['group' => 'general', 'key' => 'Filter',                   'en' => 'Filter',                   'kh' => 'ចម្រោះ'],
            ['group' => 'general', 'key' => 'Apply',                    'en' => 'Apply',                    'kh' => 'អនុវត្ត'],
            ['group' => 'general', 'key' => 'Reset',                    'en' => 'Reset',                    'kh' => 'កំណត់ឡើងវិញ'],
            ['group' => 'general', 'key' => 'Save',                     'en' => 'Save',                     'kh' => 'រក្សាទុក'],
            ['group' => 'general', 'key' => 'Save Changes',             'en' => 'Save Changes',             'kh' => 'រក្សាទុកការផ្លាស់ប្តូរ'],
            ['group' => 'general', 'key' => 'Create',                   'en' => 'Create',                   'kh' => 'បង្កើត'],
            ['group' => 'general', 'key' => 'Add',                      'en' => 'Add',                      'kh' => 'បន្ថែម'],
            ['group' => 'general', 'key' => 'Edit',                     'en' => 'Edit',                     'kh' => 'កែសម្រួល'],
            ['group' => 'general', 'key' => 'Update Item',              'en' => 'Update Item',              'kh' => 'ធ្វើបច្ចុប្បន្នភាពធាតុ'],
            ['group' => 'general', 'key' => 'Confirm Delete',           'en' => 'Confirm Delete',           'kh' => 'បញ្ជាក់ការលុប'],

            // ── Visibility / Status ────────────────────────────────────────
            ['group' => 'general', 'key' => 'Visibility',               'en' => 'Visibility',               'kh' => 'ភាពមើលឃើញ'],
            ['group' => 'general', 'key' => 'Visible on Menu',          'en' => 'Visible on Menu',          'kh' => 'អាចមើលឃើញក្នុងបញ្ជីម្ហូប'],
            ['group' => 'general', 'key' => 'Status',                   'en' => 'Status',                   'kh' => 'ស្ថានភាព'],
            ['group' => 'general', 'key' => 'Active',                   'en' => 'Active',                   'kh' => 'សកម្ម'],
            ['group' => 'general', 'key' => 'Inactive',                 'en' => 'Inactive',                 'kh' => 'អសកម្ម'],
            ['group' => 'general', 'key' => 'Enabled',                  'en' => 'Enabled',                  'kh' => 'បើក'],

            // ── Try adjusting / empty states ──────────────────────────────
            ['group' => 'general', 'key' => 'Try adjusting your search or category filter.', 'en' => 'Try adjusting your search or category filter.', 'kh' => 'ព្យាយាមកែប្រែការស្វែងរក ឬការចម្រោះប្រភេទរបស់អ្នក។'],
            ['group' => 'general', 'key' => 'Unknown',                  'en' => 'Unknown',                  'kh' => 'មិនស្គាល់'],

            // ── Kitchen ───────────────────────────────────────────────────
            ['group' => 'kitchen', 'key' => 'Kitchen',                  'en' => 'Kitchen',                  'kh' => 'ផ្ទះបាយ'],
            ['group' => 'kitchen', 'key' => 'Kitchen KDS',              'en' => 'Kitchen KDS',              'kh' => 'ប្រព័ន្ធបង្ហាញផ្ទះបាយ'],
            ['group' => 'kitchen', 'key' => 'View Kitchen',             'en' => 'View Kitchen',             'kh' => 'មើលផ្ទះបាយ'],

            // ── Auth ──────────────────────────────────────────────────────
            ['group' => 'general', 'key' => 'Login',                    'en' => 'Login',                    'kh' => 'ចូលប្រព័ន្ធ'],
            ['group' => 'general', 'key' => 'Remember Me',              'en' => 'Remember Me',              'kh' => 'ចងចាំខ្ញុំ'],
            ['group' => 'general', 'key' => 'Forgot Password',          'en' => 'Forgot Password',          'kh' => 'ភ្លេចពាក្យសម្ងាត់'],
        ];

        foreach ($translations as $translation) {
            Translation::firstOrCreate(
                ['key' => $translation['key']],
                $translation
            );
        }

        $this->command->info('✅ Missing translations inserted: ' . count($translations) . ' entries.');
    }
}
