<?php

/*
if ( ! file_exists(ABSPATH . 'outsource/binance-api-php/php-binance-api.php') ) {
    die('php-binance-api not found!');
}
//echo ABSPATH . 'outsource/binance-api-php/php-binance-api.php';
require ABSPATH . 'outsource/binance-api-php/php-binance-api.php';
*/

class API_ivn9online extends Binance\ API {
    public function fbalances( $priceData = false ) {
        if ( is_array( $priceData ) === false ) {
            $priceData = false;
        }

        $account = $this->httpRequest( 'v1/account', "GET", array(
            'fapi' => true
        ), true );
        print_r($account);

        if ( is_array( $account ) === false ) {
            echo "Error: unable to fetch your account details" . PHP_EOL;
        }

        if ( isset( $account[ 'maxWithdrawAmount' ] ) === false ) {
            echo "Error: your maxWithdrawAmount were empty or unset" . PHP_EOL;
        }

        //		return $this->balanceData($account, $priceData);
        return $account;
    }

}