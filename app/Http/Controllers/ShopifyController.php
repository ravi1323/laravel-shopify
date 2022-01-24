<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    public function index()
    {
        $shop = Auth::user();
        $metafields = $shop->api()->rest('GET', '/admin/products/metafields.json');
        dd($metafields);
        return view('welcome');
    }
}
