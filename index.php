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
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@6.0.0/dist/styles.css"/>
</head>
<body>

	<!-- <main>
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
	</main> -->
<div>
  <div class="Polaris-Page Polaris-Page--fullWidth">
    <div class="Polaris-Page-Header Polaris-Page-Header--hasActionMenu Polaris-Page-Header--mobileView Polaris-Page-Header--noBreadcrumbs Polaris-Page-Header--mediumTitle">
      <div class="Polaris-Page-Header__Row">
        <div class="Polaris-Page-Header__TitleWrapper">
          <div>
            <div class="Polaris-Header-Title__TitleAndSubtitleWrapper">
              <h1 class="Polaris-Header-Title">Orders</h1>
            </div>
          </div>
        </div>
        <div class="Polaris-Page-Header__RightAlign">
          <div class="Polaris-Page-Header__Actions">
            <div class="Polaris-ActionMenu Polaris-ActionMenu--rollup">
              <div>
                <div class="Polaris-ActionMenu-RollupActions__RollupActivator"><button class="Polaris-Button Polaris-Button--outline Polaris-Button--iconOnly" aria-label="Actions" type="button" tabindex="0" aria-controls="Polarispopover4" aria-owns="Polarispopover4" aria-expanded="false"><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                            <path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path>
                          </svg></span></span></span></button></div>
              </div>
            </div>
            <div class="Polaris-Page-Header__PrimaryActionWrapper"><button class="Polaris-Button Polaris-Button--primary Polaris-Button--iconOnly" aria-label="Create order" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                        <path d="M17 9h-6V3a1 1 0 1 0-2 0v6H3a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2z"></path>
                      </svg></span></span></span></button></div>
          </div>
        </div>
      </div>
    </div>
    <div class="Polaris-Page__Content">
      <p>Wide page content</p>
    </div>
  </div>
  <div id="PolarisPortalsContainer">
    <div data-portal-id="popover-Polarisportal2"></div>
  </div>
</div>
	
</body>
</html>