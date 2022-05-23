<?php




  
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:3007/wp-json/wc/v3/orders?oauth_consumer_key=ck_515776df572e07b824a699604654c6923578aa44&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1651146886&oauth_nonce=BM0HU4ayO6a&oauth_version=1.0&oauth_signature=ddXnkyqHO4Z%252BWyEUd0tzzQPrVg8%253D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: mailpoet_page_view=%7B%22timestamp%22%3A1651154059%7D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$order = json_decode($response)
for($i = 0; $i < count($order); $i++) {

  $order = $order[$i];
?>
     


