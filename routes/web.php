<?php

use App\Http\Controllers\ShopifyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('dashboard');
})->middleware(['verify.shopify'])->name('home');

Route::view('/products', 'products')->middleware(['verify.shopify'])->name('products');
Route::view('/customers', 'customers')->middleware(['verify.shopify'])->name('customers');
Route::view('/settings', 'settings')->middleware(['verify.shopify'])->name('settings');
