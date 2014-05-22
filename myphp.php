<?php
	echo "Welcome 1";
 require './vendor/autoload.php';
 require './bigcommerce.php';
   use Bigcommerce\Api\Client as Bigcommerce;
	
    Bigcommerce::configure(array(
    'store_url' => 'my_store_url',
    'username' => 'my_username',
    'api_key' => 'my_api_key'
    ));
    Bigcommerce_Api::setCipher('RC4-SHA')
    Bigcommerce_Api::verifyPeer(false);

    $ping = Bigcommerce::getTime();
    if ($ping) echo $ping->format('H:i:s');

    $orders = Bigcommerce::getOrders();

        foreach($orders as $order) {
            echo $order->name;
            echo $order->price;
        }

?>
