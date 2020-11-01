<?php

require './php-binance-api.php';

$api_key = "your_api_key";
$api_secret = "your_api_secret";

// @see home_directory_config.php
// use config from ~/.confg/jaggedsoft/php-binance-api.json
$api = new Binance\API($api_key, $api_secret);

// Get all of your positions, including estimated BTC value
//$balances = $api->balances(); print_r($balances);
$balances = $api->fbalances(); print_r($balances);
