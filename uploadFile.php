<?php
include($_SERVER['DOCUMENT_ROOT']."/htaccess.php");


$action=$_POST["cust_contact_no"];
 
$action=$_POST["bill_no"];
 
$action=$_POST["lr"];
 
$action=$_POST["parcels"];
 
$action=$_POST["amount"];
 
try{
$phoneID="115321454828526";
$bearer="EAAQ6kxBNYfkBAGvkBAeYrJQO34EY96kVmZAPLRJTtqXc5zE7y3aUZCvnlV1yfWlmdv5AJrKZCWZAmcxUOZAZA80SDysUIV4BsqpqL9mBP5N7sDP2c4LZCRQehvo8oS17F1bOaUIqCkl4KlwxJITCz5dfgkUsPB3dn4sMp8d1vCUWi0yBqTsbwVU";

$filepath=$_SERVER['DOCUMENT_ROOT']."/$stockManager/data/bills/B-4663.pdf";

$url="https://graph.facebook.com/v16.0/$phoneID/media";

$header= array("Authorization: Bearer $bearer");

$ch=curl_init($url);

if(function_exists('curl_file_create'))
    $file=curl_file_create($filepath,"application/pdf","B-46633");

$data=array("file"=>$file ,"type"=>"application/pdf","messaging_product"=> "whatsapp");    

curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);

curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

$result=json_decode(curl_exec($ch));

print("RESult--".$result->id);
curl_close($ch);



$url="https://graph.facebook.com/v16.0/$result->id/";

$ch=curl_init($url);

curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);

$result2=json_decode(curl_exec($ch));

curl_close($ch);



print($result2->url);
print($result2->mime_type);
print($result2->sha256);
print($result2->file_size);


















$data= array(

    "messaging_product" => "whatsapp",
    "to" => "918087978196",
    "type" => "template",
    "template" => [
                    "name" => "bills", 
                    "language" => ["code" => "en_US"],
                    "components" => [
                        [
                            "type"=>"header",
                            "parameters"=>[
                                ["type"=>"document",
                                "document"=>[
                                    "id"=>$result->id
                                ]    
                                ]
                            ]
                        ],


                        [
                        "type"=>"body",
                        "parameters"=>[
                                    ["type"=>"text",
                                    "text"=>"18120"],
                                    ["type"=>"text",
                                    "text"=>"2"],
                                    ["type"=>"text",
                                    "text"=>"b-4000"],
                                    ["type"=>"text",
                                    "text"=>"35000"]
                                    




                        ]

                        ]
                    ]
                 
                 
                    ]

);


$url="https://graph.facebook.com/v16.0/$phoneID/messages";
$header= array("Content-Type: application/JSON",
"Authorization: Bearer $bearer");

$ch=curl_init($url);

curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));

$result4=curl_exec($ch);

curl_close($ch);

print($result4);





$url="https://graph.facebook.com/v16.0/$result->id/";

$ch=curl_init($url);

curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"DELETE");
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);

$result3=json_decode(curl_exec($ch));

curl_close($ch);


print($result3 );




}
catch(Exception $e){
    $e->getMessage();
}


?>