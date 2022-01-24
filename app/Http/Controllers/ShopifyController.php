<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    public function index()
    {
        $shop = Auth::user();
        // dd($shop);
        return view('welcome');
    }
}
