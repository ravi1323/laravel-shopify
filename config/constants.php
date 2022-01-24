<?php 
$shopify_api_version = env('SHOPIFY_API_VERSION', '2021-10');

return [
    "shopify-endpoints"=>[
        "products"=>"/admin/api/".$shopify_api_version."/products.json",
        "customers"=>"/admin/api/".$shopify_api_version."/customers.json"
    ]
];

?>