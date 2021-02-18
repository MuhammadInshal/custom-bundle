<?php
$products = shopify_call($token, $shop, "/admin/api/2021-01/products.json", array(), "GET");
$products = json_decode($products['response'], JSON_PRETTY_PRINT);

foreach ($products as $product) {
	foreach ($product as $key => $value) {
		$image = '';

		if (count($value['images']) > 0) {
			$image = $value['images'][0]['src'];
		}

		echo "<img src='". $image ."' width='60'> <br />";
		echo $value['title'] . "<br />";
	}
}
?>