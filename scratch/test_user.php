<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;

$data = [
    'name' => 'Test User',
    'email' => 'test@example.com',
    'password' => 'password',
    'role_id' => 1,
    'phone' => '123456',
    'state' => 'Test State'
];

$user = new User($data);
echo "Fillable attributes:\n";
print_r($user->getFillable());
echo "\nAttributes set in model:\n";
print_r($user->getAttributes());
