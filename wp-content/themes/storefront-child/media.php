<?php




curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:3007/wp-json/wp/v2/media?oauth_consumer_key=ck_515776df572e07b824a699604654c6923578aa44&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1651149411&oauth_nonce=uGKqhe7Q7kS&oauth_version=1.0&oauth_signature=c6iG7lPU372zASgyeUuvWyqrtLo%253D',
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




$media = json_decode($response);

$title = $media->title->rendered;

echo "<tr><td>$media->id</td>
<td>$media->slug</td>
<td>$media->type</td>
<td>$media->date</td>
<td>$title</td></tr>";

echo "</table>";



?>