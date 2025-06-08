<?php
include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");


use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;



try{
$phoneID="100949199614261";
$bearer="EAAQ6kxBNYfkBAGvkBAeYrJQO34EY96kVmZAPLRJTtqXc5zE7y3aUZCvnlV1yfWlmdv5AJrKZCWZAmcxUOZAZA80SDysUIV4BsqpqL9mBP5N7sDP2c4LZCRQehvo8oS17F1bOaUIqCkl4KlwxJITCz5dfgkUsPB3dn4sMp8d1vCUWi0yBqTsbwVU";

$filepath="/$stockManager/data/bills/B-4663.pdf";



$GuzzleClient= new Client();

$url="https://graph.facebook.com/v16.0/$phoneID/media";

$header= array("Authorization: Bearer $bearer");

$data=[ 
        [
        'name' => 'file',
        'contents' => Psr7\Utils::tryFopen($filepath, 'r'),
        ],

        
        [
        'name' => 'type',
        'contents' => mime_content_type($this->filepath),
        ],

        [
        'name' => 'messaging_product',
        'contents' => 'whatsapp',
        ],
    ];

if(function_exists('curl_file_create'))
    $file=curl_file_create($filepath);

$response=$GuzzleClient->post($url,["multipart"=>$data, "headers"=>$header,'timeout' => null ,'http_errors' => false, ]);

print($response);

/**$data=array("file"=>$file ,"type"=>"application/pdf","messaging_product"=> "whatsapp");    

curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
curl_setopt($ch,CURLOPT_HEADER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

$result=curl_exec($ch);
print("RESult".$result);
curl_close($ch);
print(1);

print(2);


*/


}
catch(Exception $e){
    $e->getMessage();
}


?>