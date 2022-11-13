<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::controller(AuthController::class)->middleware('loggedin')->group(function() {
    Route::get('login', 'loginView')->name('login.index');
    Route::get('register', 'registerView')->name('register.index');
    Route::post('login', 'login')->name('login.check');
});

Route::get('/', [HomepageController::class, 'index']);
Route::get('product-detail', [HomepageController::class, 'product_detail'])->name('product-detail');
Route::get('category-detail', [HomepageController::class, 'category_detail'])->name('category-detail');

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::controller(DashboardController::class)->group(function() {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('categories-page', 'categories')->name('categories');
        Route::get('add-product-page', 'addProduct')->name('add-product');
        Route::get('product-list-page', 'productList')->name('product-list');
        Route::get('product-grid-page', 'productGrid')->name('product-grid');
        Route::get('transaction-list-page', 'transactionList')->name('transaction-list');
        Route::get('transaction-detail-page', 'transactionDetail')->name('transaction-detail');
        Route::get('seller-list-page', 'sellerList')->name('seller-list');
        Route::get('seller-detail-page', 'sellerDetail')->name('seller-detail');
        Route::get('users-layout-1-page', 'usersLayout1')->name('users-layout-1');
        Route::get('profile-overview-1-page', 'profileOverview1')->name('profile-overview-1');
        Route::get('login-page', 'login')->name('login');
        Route::get('error-page-page', 'errorPage')->name('error-page');
        Route::get('update-profile-page', 'updateProfile')->name('update-profile');
        Route::get('change-password-page', 'changePassword')->name('change-password');
    });
});
