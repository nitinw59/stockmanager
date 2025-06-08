<?php

$phoneID="100949199614261";
$bearer="EAAQ6kxBNYfkBAGvkBAeYrJQO34EY96kVmZAPLRJTtqXc5zE7y3aUZCvnlV1yfWlmdv5AJrKZCWZAmcxUOZAZA80SDysUIV4BsqpqL9mBP5N7sDP2c4LZCRQehvo8oS17F1bOaUIqCkl4KlwxJITCz5dfgkUsPB3dn4sMp8d1vCUWi0yBqTsbwVU";

$data= array(

    "messaging_product" => "whatsapp",
    "to" => "918087978196",
    "type" => "template",
    "template" => ["name" => "hello_world", "language" => ["code" => "en_US"]]

);

print(json_encode($data));

$url="https://graph.facebook.com/v15.0/$phoneID/messages";
$header= array("Content-Type: application/JSON",
"Authorization: Bearer $bearer");

$ch=curl_init($url);

curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));

$result=curl_exec($ch);

curl_close($ch);

print($result);


?>