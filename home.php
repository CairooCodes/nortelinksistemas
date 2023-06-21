<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Norte Link - SinCom</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="SinCom, Rt, Norte, Link, Sistemas, Gestão Comercial, Varejo, Atacado, Comercial, Sistema para Varejo, Sistema Comercial" name="keywords">
  <meta content="GESTÃO COMERCIAL INTEGRADA PARA VAREJO E ATACADO" name="description">
  <meta name="author" content="Cairo Felipe Developer">

  <meta property="og:title" content="Norte Link - SinCom" />
  <meta property="og:url" content="https://sincom.nortelink.com.br/" />
  <meta property="og:image" content="/assets/img/logo" />
  <meta property="og:description" content="GESTÃO COMERCIAL INTEGRADA PARA VAREJO E ATACADO" />

  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="./assets/img/icon.png" rel="icon">
  <link href="./assets/img/icon.png" rel="apple-touch-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            color1: '#26A44E',
            color2: '#2C284B',
            color3: '#FFFFFF',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-color2">
  <div class="mx-auto max-w-xl p-4">
    <header class="flex justify-center py-4">
      <img class="w-56" src="./assets/img/logo_branca.png">
    </header>
    <h5 class="text-white text-center text-justify text-lg py-4 font-medium">Conheça SinCom! Nossa ferramenta que melhora a eficiência e competitividade de seus negócios.</h5>
    <h5 class="text-white text-center text-xl py-4 font-bold">Confira alguns de nossos segmentos</h5>
    <a href="sincom/supermercado.php">
      <div>
        <div class="flex justify-center bg-1">
          <button class="animate-fade-in-0 rounded-3xl py-4 px-4 w-full text-white">SUPERMERCADO</button>
        </div>
      </div>
    </a>
    <a href="sincom/farmacia.php">
      <div class="flex justify-center mt-4 bg-2">
        <button class="animate-fade-in-1 rounded-3xl py-4 px-4 w-full text-white">FARMÁCIA</button>
      </div>
    </a>
    <a href="sincom/construcao.php">
      <div class="flex justify-center mt-4 bg-3">
        <button class="animate-fade-in-2 rounded-3xl py-4 px-4 w-full text-white">CONSTRUÇÃO</button>
      </div>
    </a>
    <a href="sincom/calcados.php">
      <div class="flex justify-center mt-4 bg-4">
        <button class="animate-fade-in-3 rounded-3xl py-4 px-4 w-full text-white">CALÇADOS</button>
      </div>
    </a>
  </div>
  <script src="./assets/js/dark_mode.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

</html>
</body>