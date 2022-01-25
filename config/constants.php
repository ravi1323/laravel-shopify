<?php 
$shopify_api_version = env('SHOPIFY_API_VERSION', '2021-10');

return [
    "shopify-endpoints"=>[
        "products"=>"/admin/api/".$shopify_api_version."/products.json",
        "customers"=>"/admin/api/".$shopify_api_version."/customers.json",
        "smart_collections"=>"/admin/api/".$shopify_api_version."/smart_collections.json",
        "collect"=>"/admin/api/".$shopify_api_version."/collects.json",
        "collection"=>function($collection_id) use($shopify_api_version) {
            return "/admin/api/".$shopify_api_version."/collections/".$collection_id.".json";
        }
    ]
];

?>