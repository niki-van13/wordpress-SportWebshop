<?php


$data = file_get_contents("order_complete.txt", true);
$order = json_decode($data, true);
echo"<pre>";
print_r($order);
echo"</pre>";

if( $order['status'] == 'completed');
//if (!is_array($order['status'] ?? false)) continue;
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost:4536/wp-json/wc/v3/orders?oauth_consumer_key=ck_2e2521f5e19c4004d69c03035f59b36a495e33d6&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1650968107&oauth_nonce=0PER0FicmLM&oauth_version=1.0&oauth_signature=jLI8We3QUxIEijha5S%252FUR4PIE4k%253D',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',

    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
  
    $all_orders = json_decode($response);
    ?>

       
        <?php echo "<table>";
        echo "<tr><th>Order ID</th><th>Orderstatus</th><th>Pris</th><th>Datum</th></tr>";

        for ($i = 0; $i < count($all_orders); $i++) {
            $order = $all_orders[$i];

            echo "<tr><td>$order->id</td><td> $order->status</td><td> $order->total</td><td> $order->date_created</td>";


       
        }
    echo "</table>";

        ?>




















