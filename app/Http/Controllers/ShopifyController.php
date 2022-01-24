<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    public function index()
    {
        $shop = Auth::user();
        $metafields = $shop->api()->rest('GET', '/admin/metafields.json');
        $products = $shop->api()->rest('GET', '/admin/api/2021-10/products.json');
        return view('welcome', [
            'products'=>$products
        ]);
    }
}
