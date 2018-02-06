<?php

$data = new \stdClass;
$data->businessName = $_POST["businessName"];
$data->ownerFirstName =  $_POST["ownerFirstName"];
$data->ownerLastName =  $_POST["ownerLastName"];
$data->ownerPhone =  $_POST["ownerPhone"];
$data->ownerEmail =  $_POST["ownerEmail"];
$data->ownerPassword =  $_POST["ownerPassword"];
$data->token_culqi =  $_POST["token_culqi"];
$data->paquete = $_POST["paquete"];
$data->paymentOption = $_POST["paymentOption"];

$curl = curl_init('https://tuquienda.com/register.php');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = json_decode(curl_exec($curl));
curl_close($curl);

echo json_encode($result);
?>