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

print_r($collectionList);



// header("Location: install.php?shop=" . $store['shop']);
// exit();

?>