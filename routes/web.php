<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\MenuItemController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\TableController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\KitchenController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\CurrencyController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'kh'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Admin only
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('menu', MenuItemController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('customers', CustomerController::class);
        Route::resource('currencies', CurrencyController::class);
        
        // Profile Admin
        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

        // Settings
        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
        
        // Income Reports
        Route::get('reports/income', [ReportController::class, 'income'])->name('reports.income');
        Route::get('reports/income/pdf', [ReportController::class, 'exportPdf'])->name('reports.income.pdf');
        Route::get('reports/income/excel', [ReportController::class, 'exportExcel'])->name('reports.income.excel');
    });

    // Admin and Cashier
    Route::middleware(['role:admin,cashier'])->group(function () {
        Route::resource('orders', OrderController::class);
        Route::resource('tables', TableController::class);
        Route::resource('payments', PaymentController::class)->only(['index', 'show']);
        Route::patch('orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.update-status');
        Route::post('orders/{order}/pay', [PaymentController::class, 'process'])->name('orders.pay');
        Route::get('orders/{order}/receipt', [PaymentController::class, 'receipt'])->name('orders.receipt');

        // Kitchen KDS
        Route::get('kitchen', [KitchenController::class, 'index'])->name('kitchen.index');
        Route::post('kitchen/order/{order}/note', [KitchenController::class, 'updateNote'])->name('kitchen.update-note');
    });
});


