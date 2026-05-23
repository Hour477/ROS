<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$translations = \DB::table('translations')->get();
$dataKh = [];
foreach ($translations as $t) {
    $val = $t->kh ?: $t->en;
    if ($val) $dataKh[$t->key] = $val;
}
file_put_contents(lang_path('kh.json'), json_encode($dataKh, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
echo "kh.json forced to rebuild.\n";
