<div class="alert warning">
  <dl>
    <dt>Warning Alert</dt>
    <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris. Magnis dis parturient montes nascetur. </dd>
  </dl>
</div>

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