<?php

$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];

require_once('../../vendor/autoload.php');

use GuzzleHttp\Client;

$client = new Client([
  'verify' => false
]);

$response = $client->request('POST', 'https://api.rd.services/platform/contacts', [
  'body' => '{"name":"' . $name . '","email":"' . $email . '","job_title":"Desenvolvedor","bio":"Muito engajado","website":"https://site-contato.rdstation.com/","mobile_phone":"' . $whatsapp . '","city":"Florianópolis"}',
  'headers' => [
    'accept' => 'application/json',
    'authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5yZC5zZXJ2aWNlcyIsInN1YiI6ImVtUzNWcFVRemtYTHNjenpEakg4VE1LMVFvSmtRSGtjUWJ5U05Ld1FjOWdAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYXBwLnJkc3RhdGlvbi5jb20uYnIvYXBpL3YyLyIsImFwcF9uYW1lIjoiTFBzIEJvb20iLCJleHAiOjE2ODQ1MjEzNDcsImlhdCI6MTY4NDQzNDk0Nywic2NvcGUiOiIifQ.hRFyOEA2uRm6urY14vgZL4bNM-Xk9RKnik-H_zhSi89xT9wFBzHvzV-NmgK_a-eggVIIKjbZpcN-QvC_XFoVNpMT3mcKKdm5x3DotL2NORcA5p57tKyNleE2CvwR9jj5fGkpGjlq9ajsaC03J0arOMOaZ2bZCVPIQhAkmEtppldzbGZn3VFobYtRrR9I6Fift7I0IntnZxPCLCneT09z2l1LrM6k0UBUQ7gI5Ct79gzU3z52YsvHYp5aNXW23_x0JfJqlijzQmH7JdISzvAt9aaN70uYioQbIRvC-UNPQkplO1GdslJxUN93lzyxzxfpmXnW4H_NQs-CayJ7Z2dFqQ',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();
