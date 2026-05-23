<?php
/**
 * Scan all blade files for __('...') translation keys,
 * then compare against the translations table in the DB.
 * Outputs: missing keys that need to be added.
 */

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;

// 1. Scan all blade files for __('...') patterns
$viewsPath = __DIR__ . '/resources/views';
$bladeFiles = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($viewsPath)
);

$foundKeys = [];
foreach ($bladeFiles as $file) {
    if (!$file->isFile() || !str_ends_with($file->getFilename(), '.blade.php')) {
        continue;
    }
    $content = file_get_contents($file->getRealPath());
    // Match __('...') and __("...")
    preg_match_all('/__\([\'"](.+?)[\'"]\)/', $content, $matches);
    foreach ($matches[1] as $key) {
        $foundKeys[$key] = $file->getPathname();
    }
    // Also match @lang('...')
    preg_match_all('/@lang\([\'"](.+?)[\'"]\)/', $content, $matches2);
    foreach ($matches2[1] as $key) {
        $foundKeys[$key] = $file->getPathname();
    }
}

ksort($foundKeys);
echo "=== TOTAL UNIQUE KEYS IN BLADES: " . count($foundKeys) . " ===\n\n";

// 2. Get existing keys from DB
$existingKeys = DB::table('translations')->pluck('key')->toArray();
$existingKeySet = array_flip($existingKeys);

// 3. Find missing keys
$missing = [];
foreach ($foundKeys as $key => $file) {
    if (!isset($existingKeySet[$key])) {
        $relativePath = str_replace(__DIR__ . '/resources/views/', '', $file);
        $missing[$key] = $relativePath;
    }
}

echo "=== MISSING FROM DB: " . count($missing) . " ===\n\n";
foreach ($missing as $key => $file) {
    echo "[MISSING] \"$key\"\n         → $file\n";
}

echo "\n=== SEEDER FORMAT FOR MISSING KEYS ===\n\n";
foreach ($missing as $key => $file) {
    $escaped = str_replace("'", "\\'", $key);
    echo "['group' => 'general', 'key' => '$escaped', 'en' => '$escaped', 'kh' => '/* TODO: translate */'],\n";
}
