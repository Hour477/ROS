<?php
$directory = new RecursiveDirectoryIterator(__DIR__ . '/resources/views');
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+\.blade\.php$/i', RecursiveRegexIterator::GET_MATCH);

$keys = [];
foreach ($regex as $file) {
    $content = file_get_contents($file[0]);
    // Match __('key') or __("key")
    if (preg_match_all("/__\(\s*(['\"])(.*?)\\1\s*\)/", $content, $matches)) {
        foreach ($matches[2] as $key) {
            $keys[$key] = true;
        }
    }
}

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$existingKeys = \DB::table('translations')->pluck('key')->toArray();

$missingKeys = [];
foreach (array_keys($keys) as $k) {
    if (!in_array($k, $existingKeys)) {
        $missingKeys[] = $k;
    }
}

file_put_contents('missing_translations.json', json_encode($missingKeys, JSON_PRETTY_PRINT));
echo "Found " . count($missingKeys) . " missing keys.\n";
