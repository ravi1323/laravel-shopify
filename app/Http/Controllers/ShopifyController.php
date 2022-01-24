<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    public function index()
    {
        $shop = Auth::user();
        
        /**
         * collecting all product id
         */
        $products = $shop->api()->rest('GET', '/admin/api/2021-10/products.json'); // fetching all products.
        $product_ids = [];
        foreach($products["body"]["products"] as $product)
        {
            array_push($product_ids, $product["id"]);
        }

        /**
         * fetching all metafields of all product
         */
        $metafields = [];
        foreach($product_ids as $product_id)
        {
            $product_metafield = $shop->api()->rest('GET', '/admin/products/'.$product_id.'/metafields.json')["body"]["metafields"]; //7546804502761
            array_push($metafields,$product_metafield);
        }
        dd($metafields);
        return view('welcome', [
            'products'=>$products["body"]["products"]
        ]);
    }
}
