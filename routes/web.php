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
Route::middleware(['verify.shopify'])->group(function() {
    
    Route::get('/', [ShopifyController::class, 'index'])->name('home');
    
    Route::get('/products-metafield', [ShopifyController::class,'products_metafield'])->name('products-metafield');
    Route::get('/customers-metafield', [ShopifyController::class,'customers_matafield'])->name('customers-metafield');
    Route::get('/collection-metafield', [ShopifyController::class,'collections_metafield'])->name('collections-metafield');
    
    Route::get('/create_shop_metafield', [ShopifyController::class, 'create_shop_metafield'])->name('create_shop_metafield');

    Route::post('/store_shop_metafield', [ShopifyController::class, 'store_shop_metafield'])->name('store_shop_metafield');
});