<?php
$name = $_POST['name']; 
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$curl = curl_init();

curl_setopt($curl, CURLOPT_HTTPHEADER, array(
  "Authorization: Token d82a523e-01fd-4af7-93e1-6729157cb9ba",
  "Content-Type: application/json"
));

curl_setopt(
  $curl,
  CURLOPT_URL,
  "https://api.agendor.com.br/v3/people"
);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array(
  "name" => "$name - iCompany RT",
  "contact" => array(
    "email" => "$email",
    "whatsapp" => "$whatsapp"
  )
)));

header("Location: ../../obrigado.php");

$response = curl_exec($curl);