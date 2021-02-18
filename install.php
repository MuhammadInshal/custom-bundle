<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "148342cf127a61db76616a8d1bc1795e";
$scopes = "read_orders,write_products";
$redirect_uri = "https://custom-product-bundle.herokuapp.com/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();