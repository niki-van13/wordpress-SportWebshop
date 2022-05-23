<?php





url_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:3007/wp-json/wp/v2/media?oauth_consumer_key=ck_515776df572e07b824a699604654c6923578aa44&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1651148524&oauth_nonce=2CqvKA9BdXn&oauth_version=1.0&oauth_signature=Nw7nYZKxNRuOSplZTJrf57wxtrE%253D',
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
echo $response;


$post = json_decode($response);

$title = $post->title->rendered;

echo "<tr><td>$post->id</td>
<td>$post->slug</td>
<td>$post->type</td>
<td>$post->date</td>
<td>$title</td></tr>";

echo "</table>";