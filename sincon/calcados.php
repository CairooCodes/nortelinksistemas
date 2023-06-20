<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Norte Link - iCompany RT</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="iCompany RT, Rt, Norte, Link, Sistemas, Gestão Comercial, Varejo, Atacado, Comercial, Sistema para Varejo, Sistema Comercial" name="keywords">
  <meta content="GESTÃO COMERCIAL INTEGRADA PARA VAREJO E ATACADO" name="description">
  <meta name="author" content="Cairo Felipe Developer">

  <meta property="og:title" content="Norte Link - iCompany RT" />
  <meta property="og:url" content="icompanyrt.nortelink.com.br" />
  <meta property="og:image" content="/assets/img/logo" />
  <meta property="og:description" content="GESTÃO COMERCIAL INTEGRADA PARA VAREJO E ATACADO" />

  <link rel="stylesheet" href="../assets/css/style.css">
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


<body>
  <header class="w-full shadow-lg">
    <nav class="border-gray-200 py-2.5 bg-color3">
      <div class="flex flex-wrap items-center justify-between max-w-6xl px-4 mx-auto">
        <a href="/">
          <img src="../assets/img/logo.png" class="logo" alt="Norte Link" />
        </a>
        <div class="flex items-center lg:order-2">
          <div class="nav_icons px-4 flex space-x-2">
            <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg hidden lg:block" href="#">
              <i class="bi bi-whatsapp"></i>
            </a>
            <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg hidden lg:block" href="#">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
          <span id="theme_toggler">
            <a class="text-color1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
              </svg>
            </a>
          </span>
          <a class="bg-color1 p-1.5 mr-1 rounded-full w-10 h-10 text-center text-white text-lg lg:hidden" href="#">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg lg:hidden" href="#">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>
    </nav>
  </header>
  </div>
  <section>
      <div>
        <img class="hidden lg:block w-full" src="../assets/img/Banners_supermercadoDesktop_copiar.jpg" />
        <img class="lg:hidden block w-full" src="../assets/img/Banners_supermercadoMobile_copiar.jpg" />
      </div>
  </section>
  <section class="pt-10">
    <img class="hidden lg:block w-full" src="../assets/img/Banners_supermercadoDesktop.jpg" />
    <img class="lg:hidden block w-full" src="../assets/img/Banners_supermercadoMobile.jpg" />
  </section>
  <div class="flex items-center p-3 md:p-0" id="saiba-mais">
    <div class="container mx-auto">
      <div class="max-w-xl mx-auto md:my-5 form-home p-2 md:p-5 rounded-md shadow-sm">
        <div class="text-center">
          <h1 class="my-3 text-color2 text-lg md:text-2xl font-semibold">Preencha o formulário para mais informações</h1>
        </div>
        <div class="m-7">
          <form action="../config/api/create_lead_farmacia.php" method="POST">
            <div class="mb-6">
              <label for="name" class="block mb-2 text-sm">Nome completo</label>
              <input type="text" name="name" placeholder="Digite aqui seu nome" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>
            <div class="mb-6">
              <label for="email" class="block mb-2">Email</label>
              <input type="email" name="email" placeholder="Digite aqui seu email" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>
            <div class="mb-6">

              <label for="phone" class="text-sm">Seu WhatsApp</label>
              <input type="text" name="whatsapp" placeholder="Digite aqui seu número" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>
            <div class="mb-6">
              <button type="submit" class="w-full px-3 py-4 rounded-md form-button bg-color1 text-white">Enviar mensagem</button>
            </div>
            <p class="text-base text-center text-gray-400" id="result">
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-color3 mt-10 border border-gray-300">
    <div class="max-w-6xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
      <div class="grid grid-cols-2">
        <div>
          <img class="w-56" src="../assets/img/logo.png">
          <i class="bi bi-whatsapp"></i>
          <i class="bi bi-instagram"></i>
          <i class="bi bi-facebook"></i>
        </div>
        <div>
          <h3 class="mb-6 text-sm font-semibold text-color2 uppercase">Contato</h3>
          <p class="text-color2">
            R. Senador Cândido Ferraz, 1250 Sala 604 - Jóquei, Teresina - PI
            Cep:64.049-250
          </p>
        </div>
      </div>
      <div class="text-center pt-10">
        <span class="block text-base text-center text-color2">© 2023 - NORTELINK.COM.BR
        </span>
        <div class="pt-10">
          <span class="block text-xs text-center text-color2">Site criado por
          </span>
          <span class="block text-xs text-center text-color2">Web Developer Full Stack: @cairofelipedev
          </span>
        </div>
      </div>
    </div>
  </footer>
  <script src="./assets/js/dark_mode.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>