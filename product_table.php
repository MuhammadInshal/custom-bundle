<table>
  <thead>
    <tr>
      <th>Image</th>
      <th>Product</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php
		$products = shopify_call($token, $shop, "/admin/api/2021-01/products.json", array(), "GET");
		$products = json_decode($products['response'], JSON_PRETTY_PRINT);

		echo "<pre>";
		print_r($products);
		die();

		foreach ($products as $product) {
			foreach ($product as $key => $value) {
				$image = '';

				if (count($value['images']) > 0) {
					$image = $value['images'][0]['src'];
				}

				?>
				<tr>
			      <td><a href="#"><img width="35" height="35" alt="" src="<?php echo $image; ?>"></a></td>
			      <td><a href="#"><?php echo $value['title']; ?></a></td>
			      <td><span class="tag green"><?php echo $value['status']; ?></span></td>
			      <td><button class="secondary icon-trash"></button></td>
			    </tr>
			    <?php
			}
		}
	?>
  </tbody>
</table>