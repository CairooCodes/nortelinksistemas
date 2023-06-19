<?php
require_once('../../db_config.php');
require_once('../../vendor/autoload.php');


use GuzzleHttp\Client;

$client = new Client([
  'verify' => false
]);

$response = $client->request('POST', 'https://api.rd.services/auth/token', [
  'body' => '{"client_id":"87f8cd81-17ab-4315-9405-605b03cb5dc8","client_secret":"f5f32933469247e1bd21b34a9171c95e","refresh_token":"-9JNOjewqfI48b2uGdp5xzMTWlE6pMLHEVBztd_Anhs"}',
  'headers' => [
    'accept' => 'application/json',
    'content-type' => 'application/json',
  ],
]);

if ($response->getStatusCode() == 200) {
  $body = $response->getBody();
  $content = json_decode($body, true);
  $valorExtraido = $content['access_token'];

  $stmt = $pdo->prepare("UPDATE rd_station SET acess_token = :valor");
  $stmt->bindValue(':valor', $valorExtraido);
  $stmt->execute();
}
