<?php
require_once('../../db_config.php');

$stmt = $pdo->prepare("SELECT * FROM rd_station");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
}

$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];

require_once('../../vendor/autoload.php');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$client = new Client([
  'verify' => false
]);

try {
  $response = $client->request('POST', 'https://api.rd.services/platform/contacts', [
    'body' => '{"name":"' . $name . '","email":"' . $email . '","mobile_phone":"' . $whatsapp . '","tags": ["site_construcao"]}',
    'headers' => [
      'accept' => 'application/json',
      'authorization' => 'Bearer ' . $acess_token . '',
      'content-type' => 'application/json',
    ],
  ]);

  echo '<script>
        alert("Obrigado pelo contato! Em instantes nosso time entrará em contato com você");
        window.location.href = "../../home.php";
        </script>';
} catch (RequestException $e) {
  if ($e->hasResponse()) {
    $response = $e->getResponse();
    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();
    $errorData = json_decode($body, true);
    if ($errorData && isset($errorData['errors']['error_type']) && $errorData['errors']['error_type'] === 'EMAIL_ALREADY_IN_USE') {
      echo '<script>
            alert("O email já está sendo utilizado. Por favor, utilize outro email.");
            window.location.href = "../../home.php";
            </script>';
    } else {
      echo '<script>
            alert("Erro. Tente novamente");
          </script>';
    }
  } else {
    echo '<script>alert("Erro. Tente novamente");</script>';
  }
}
