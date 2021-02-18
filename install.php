<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "2776cb44b59e7a668e91eb691febed23";
$scopes = "read_orders,write_products";
$redirect_uri = "https://custom-product-bundle.herokuapp.com/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();