<?php
	echo "Welcome 1";
 require './vendor/autoload.php';
 require './bigcommerce.php';
   use Bigcommerce\Api\Client as Bigcommerce;
	
    Bigcommerce::configure(array(
    'store_url' => 'https://www.trainparty.com/api/v2/',
    'username' => 'kirti',
    'api_key' => '1abb8c7691985cee642ad31e930533e182f212b4'
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
