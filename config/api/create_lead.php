<?php
// $name = $_POST['name'];
// $email = $_POST['email'];
// $whatsapp = $_POST['whatsapp'];
// $curl = curl_init();

// curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//   "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5yZC5zZXJ2aWNlcyIsInN1YiI6ImVtUzNWcFVRemtYTHNjenpEakg4VE1LMVFvSmtRSGtjUWJ5U05Ld1FjOWdAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYXBwLnJkc3RhdGlvbi5jb20uYnIvYXBpL3YyLyIsImFwcF9uYW1lIjoiTFBzIEJvb20iLCJleHAiOjE2ODQ1MjEzNDcsImlhdCI6MTY4NDQzNDk0Nywic2NvcGUiOiIifQ.hRFyOEA2uRm6urY14vgZL4bNM-Xk9RKnik-H_zhSi89xT9wFBzHvzV-NmgK_a-eggVIIKjbZpcN-QvC_XFoVNpMT3mcKKdm5x3DotL2NORcA5p57tKyNleE2CvwR9jj5fGkpGjlq9ajsaC03J0arOMOaZ2bZCVPIQhAkmEtppldzbGZn3VFobYtRrR9I6Fift7I0IntnZxPCLCneT09z2l1LrM6k0UBUQ7gI5Ct79gzU3z52YsvHYp5aNXW23_x0JfJqlijzQmH7JdISzvAt9aaN70uYioQbIRvC-UNPQkplO1GdslJxUN93lzyxzxfpmXnW4H_NQs-CayJ7Z2dFqQ",
//   "Content-Type: application/json"
// ));


// curl_setopt(
//   $curl,
//   CURLOPT_URL,
//   "https://api.rd.services/platform/contacts/"
// );
// curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array(
//   "name" => "Caio Developer",
//   "email" => "contato8@exemplo.com",
//   "mobile_phone" => "+55 48 3037-3600"
// )));

// $response = curl_exec($curl);
// print_r($response);


// URL da API
$url = 'https://api.rd.services/platform/contacts/';

// Dados para enviar na requisição POST


// Token de autenticação
$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5yZC5zZXJ2aWNlcyIsInN1YiI6ImVtUzNWcFVRemtYTHNjenpEakg4VE1LMVFvSmtRSGtjUWJ5U05Ld1FjOWdAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYXBwLnJkc3RhdGlvbi5jb20uYnIvYXBpL3YyLyIsImFwcF9uYW1lIjoiTFBzIEJvb20iLCJleHAiOjE2ODQ1MjEzNDcsImlhdCI6MTY4NDQzNDk0Nywic2NvcGUiOiIifQ.hRFyOEA2uRm6urY14vgZL4bNM-Xk9RKnik-H_zhSi89xT9wFBzHvzV-NmgK_a-eggVIIKjbZpcN-QvC_XFoVNpMT3mcKKdm5x3DotL2NORcA5p57tKyNleE2CvwR9jj5fGkpGjlq9ajsaC03J0arOMOaZ2bZCVPIQhAkmEtppldzbGZn3VFobYtRrR9I6Fift7I0IntnZxPCLCneT09z2l1LrM6k0UBUQ7gI5Ct79gzU3z52YsvHYp5aNXW23_x0JfJqlijzQmH7JdISzvAt9aaN70uYioQbIRvC-UNPQkplO1GdslJxUN93lzyxzxfpmXnW4H_NQs-CayJ7Z2dFqQ';

// Inicializa o cURL
$ch = curl_init($url);

// Configura as opções do cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retorna a resposta como string
curl_setopt($ch, CURLOPT_POST, true); // Define o método como POST
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
  "name" => "Caio Developer",
  "email" => "contato811@exemplo.com",
  "mobile_phone" => "+5500000000"
)));
// Define os dados a serem enviados

// Define o cabeçalho de autenticação Bearer Token
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Authorization: Bearer ' . $token,
));

// Desabilita a verificação do certificado SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Executa a requisição cURL
$response = curl_exec($ch);

// Verifica se ocorreu algum erro
if ($response === false) {
  echo 'Erro ao fazer a requisição: ' . curl_error($ch);
} else {
  // Processa a resposta
  echo 'Resposta da API: ' . $response;
}

// Fecha a requisição cURL
curl_close($ch);
