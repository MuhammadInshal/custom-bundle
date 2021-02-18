<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "494da3488b790c2de39a1f475bcd116e";
$scopes = "read_orders,write_orders,write_products";
$redirect_uri = "https://custom-product-bundle.herokuapp.com/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();