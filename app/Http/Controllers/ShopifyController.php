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
        $endpoints = Config::get('constants.shopify-endpoints');
        $shop_metafields = $shop->api()->rest('GET', $endpoints['shop_metafield'])["body"]["metafields"];
        return view('dashboard',[
            "shop_metafields"=>$shop_metafields
        ]);
    }

    public function products_metafield() 
    {
        $shop = Auth::user();
        $endpoints = Config::get('constants.shopify-endpoints');
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
         * fetching all products metafield using product id.
         */
        $products_metafields = [];
        foreach($product_ids as $product_id)
        {
            $product_metafield = $shop->api()->rest('GET', $endpoints["product_metafield"]($product_id))["body"]["metafields"];
            array_push($products_metafields,$product_metafield);
        }
        return view('products_metafield',[
            "products_metafields"=>$products_metafields
        ]);
    }

    public function customers_matafield() 
    {
        $shop = Auth::user();
        $endpoints = Config::get('constants.shopify-endpoints');
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
         * fetching all customers metafield using customer id.
         */
        $customers_metafields = [];
        foreach($customer_ids as $customer_id)
        {
            $customer_metafield = $shop->api()->rest('GET', $endpoints["customer_metafield"]($customer_id))["body"]["metafields"];
            array_push($customers_metafields, $customer_metafield);
        }
        return view('customers_metafield', [
            "customers_metafields"=>$customers_metafields
        ]);
    }

    public function collections_metafield() 
    {
        $shop = Auth::user();
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

        $collections_metafields = [];
        foreach($collection_ids as $collection_id) {
            $collection_metafield = $shop->api()->rest('GET',$endpoints["collection_metafield"]($collection_id))["body"]["metafields"];
            array_push($collections_metafields, $collection_metafield);
        }
        return view('collections_metafield',[
            "collections_metafields"=>$collections_metafields
        ]);
    }

    public function create_shop_metafield() 
    {
        $metafield_value_types = get_metafield_value_types();
        return view('create_shop_meatafield',[
            "metafield_value_types"=>$metafield_value_types
        ]);
    }

    public function store_shop_metafield(Request $request) 
    {
        $request->validate([
            "key"=>"required",
            "namespace"=>"required",
            "value"=>"required",
            "description"=>"required"
        ]);
    }
}
