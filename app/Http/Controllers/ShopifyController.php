<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class ShopifyController extends Controller
{
    public function index()
    {
        $shop = Auth::user();

        // getting all shopify endpoints
        $endpoints = Config::get('constants.shopify-endpoints');
        
        /**
         * collecting all collections id
         */
        $collect = $shop->api()->rest('GET', $endpoints["collect"]);
        $collection_ids = [];
        foreach($collect['body']['collects'] as $collect)
        {
            array_push($collection_ids, $collect['collection_id']);
        }

        /**
         * collecting all products id
         */
        $products = $shop->api()->rest('GET', $endpoints["products"]); // fetching all products.
        $product_ids = [];
        foreach($products["body"]["products"] as $product)
        {
            array_push($product_ids, $product["id"]);
        }
        /**
         * collecting all customers id
         */
        $customers = $shop->api()->rest('GET', $endpoints["customers"]);
        $customer_ids = [];
        foreach($customers["body"]["customers"] as $customer)
        {
            array_push($customer_ids, $customer["id"]);
        }

        /**
         * fetching all metafields of [products, collections, customers, shop].
         */
        $metafields = [
            "products_metafield"=>[],
            "customers_metafield"=>[],
            "collections_metafield"=>[]
        ];
        foreach($product_ids as $product_id)
        {
            $product_metafield = $shop->api()->rest('GET', '/admin/products/'.$product_id.'/metafields.json')["body"]["metafields"];
            array_push($metafields["products_metafield"],$product_metafield);
        }
        foreach($customer_ids as $customer_id)
        {
            $customer_metafield = $shop->api()->rest('GET', '/admin/customers/'.$customer_id.'/metafields.json')["body"]["metafields"];
            array_push($metafields["customers_metafield"], $customer_metafield);
        }
        foreach($collection_ids as $collection_id) {
            $collection_metafield = $shop->api()->rest('GET','/admin/collections/'.$collection_id.'/metafields.json')["body"]["metafields"];
            array_push($metafields["collections_metafield"], $collection_metafield);
        }
        dd($metafields);
        return view('welcome', [
            'products'=>$products["body"]["products"]
        ]);
    }
}
