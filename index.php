<?php

 require 'vendor/autoload.php';
 require 'bigcommerce.php';
 use Bigcommerce\Api\Client as Bigcommerce;
	

//    $ping = Bigcommerce::getTime();
//    if ($ping) echo $ping->format('H:i:s');
 
    Bigcommerce::configure(array(
    'store_url' => 'https://www.trainparty.com/',
    'username' => 'kirti',
    'api_key' => '1abb8c7691985cee642ad31e930533e182f212b4'
    ));
    Bigcommerce::setCipher('rsa_rc4_128_sha');
    Bigcommerce::verifyPeer(false);

    $orders = Bigcommerce::getOrders();
	
        foreach ($orders as $record) {
	    echo "\n";	
            print_r ($record->id . " :: " . $record->billing_address->first_name);
        }

?>
