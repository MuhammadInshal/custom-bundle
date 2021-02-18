<?php 
// Get our helper functions
require_once("inc/functions.php");

// $requests = $_GET;
// $hmac     = $_GET['hmac'];

// $serializeArray = serialize($requests);
// $requests       = array_diff_key($requests, array('hmac' => ''));
// ksort($requests);

$token = "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";
$shop  = "gallery-one-shop";

//echo $shop;

$collectionList = shopify_call($token, $shop, "/admin/api/2021-01/custom_collections.json", array(), "GET");
$collectionList = json_decode($collectionList['response'], JSON_PRETTY_PRINT);
$collection_id  = $collectionList['custom_collections'][0]['id'];


$collects = shopify_call($token, $shop, "/admin/api/2021-01/collects.json", array('collection_id' => $collection_id), "GET");
$collects = json_decode($collects['response'], JSON_PRETTY_PRINT);

foreach ($collects as $collect) {
	foreach ($collect as $key => $value) {
		$products = shopify_call($token, $shop, "/admin/api/2021-01/products/". $value['product_id'] .".json", array(), "GET");
		$products = json_decode($products['response'], JSON_PRETTY_PRINT);
		print_r($products);
		// echo $products['product']['title'];
	}
}

exit();

// header("Location: install.php?shop=" . $store['shop']);
// exit();

?>