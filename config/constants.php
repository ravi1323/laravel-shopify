<?php 
$shopify_api_version = env('SHOPIFY_API_VERSION', '2021-10');

return [
    "shopify-endpoints"=>[
        "shop_metafield"=>"/admin/metafields.json",
        "products"=>"/admin/api/".$shopify_api_version."/products.json",
        "product_metafield"=>function($product_id) {
            return "/admin/products/".$product_id."/metafields.json";
        },
        "customers"=>"/admin/api/".$shopify_api_version."/customers.json",
        "customer_metafield"=>function($customer_id) {
            return "/admin/customers/".$customer_id."/metafields.json";
        },
        "smart_collections"=>"/admin/api/".$shopify_api_version."/smart_collections.json",
        "collect"=>"/admin/api/".$shopify_api_version."/collects.json",
        "collection"=>function($collection_id) use($shopify_api_version) {
            return "/admin/api/".$shopify_api_version."/collections/".$collection_id.".json";
        },
        "collection_metafield"=>function($collection_id) {
            return "/admin/collections/".$collection_id."/metafields.json";
        }
    ]
];

?>