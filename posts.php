<?php






$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:4536/wp-json/wp/v2/posts',
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



?>