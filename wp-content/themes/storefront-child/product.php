<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:4536/wp-json/wc/v3/products?oauth_consumer_key=ck_2e2521f5e19c4004d69c03035f59b36a495e33d6&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1650968166&oauth_nonce=8GON0XtIL7w&oauth_version=1.0&oauth_signature=gmMjg0lmWWznoFrb%252BNO97Y5NVn4%253D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: mailpoet_page_view=%7B%22timestamp%22%3A1650975307%7D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


$post = json_decode($response);

$title = $post->title->rendered;

echo "<tr><td>$post->id</td>
<td>$post->slug</td>
<td>$post->type</td>
<td>$post->date</td>
<td>$title</td></tr>";

echo "</table>";
