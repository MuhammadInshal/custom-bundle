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

// $collectionList = shopify_call($token, $shop, "/admin/api/2021-01/custom_collections.json", array(), "GET");
// $collectionList = json_decode($collectionList['response'], JSON_PRETTY_PRINT);
// $collection_id  = $collectionList['custom_collections'][0]['id'];

// echo $collection_id;


// $collects = shopify_call($token, $shop, "/admin/api/2021-01/collects.json", array('collection_id' => $collection_id), "GET");
// $collects = json_decode($collects['response'], JSON_PRETTY_PRINT);

// foreach ($collects as $collect) {
// 	foreach ($collect as $key => $value) {
// 		$products = shopify_call($token, $shop, "/admin/api/2021-01/products/". $value['product_id'] .".json", array(), "GET");
// 		$products = json_decode($products['response'], JSON_PRETTY_PRINT);
// 		echo $products['product']['title'] . "<br />";
// 	}
// }
// $products = shopify_call($token, $shop, "/admin/api/2021-01/products.json", array(), "GET");
// $products = json_decode($products['response'], JSON_PRETTY_PRINT);

// foreach ($products as $product) {
// 	foreach ($product as $key => $value) {
// 		$image = '';

// 		if (count($value['images']) > 0) {
// 			$image = $value['images'][0]['src'];
// 		}

// 		echo "<img src='". $image ."' width='60'> <br />";
// 		echo $value['title'] . "<br />";
// 	}
// }

// exit();

// header("Location: install.php?shop=" . $store['shop']);
// exit();
// require_once('home.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<main>
		<section>
		  <article>
		  	<div class="card has-sections">
			    <div class="card-section">
			      <?php require_once('header.php'); ?>
			    </div>
			    <hr/>
			    <div class="card-section">
			      <?php require_once('product_table.php'); ?>
			    </div>
			    <hr/>
			</div>
		  </article>
		</section>
	</main>
	
</body>
</html>