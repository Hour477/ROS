<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$ps = \Spatie\Permission\Models\Permission::pluck('name')->toArray();
foreach ($ps as $p) {
    echo $p . "\n";
}
