<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Norte Link - SinCom para Calçados</title>
  <?php include "../components/head_core.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body>
  <?php include "../components/navbar.php"; ?>
  <section class="swiper swiper_banners">
    <div class="swiper-wrapper">
      <div class="swiper-slide shadow">
        <img class="hidden lg:block w-full" src="../assets/img/Banners calçadosDesktop.jpg" />
        <img class="lg:hidden block w-full" src="../assets/img/Banners calçadosMobile.jpg" />
      </div>
      <div class="swiper-slide shadow">
        <img class="hidden lg:block w-full" src="../assets/img/Banners calçadosDesktop copiar.jpg" />
        <img class="lg:hidden block w-full" src="../assets/img/Banners calçadosMobile copiar.jpg" />
      </div>
    </div>
  </section>

  <div class="flex items-center p-3 md:p-0">
    <div class="container mx-auto">
      <div class="max-w-xl mx-auto md:my-5 bg-color2 p-2 md:p-5 rounded-md shadow-sm">
        <div class="text-center">
          <p class="my-3 text-white text-lg md:text-2xl font-semibold">Preencha o formulário para mais informações</p>
        </div>
        <div class="m-7">
          <form action="../config/api/create_lead_calcados.php" method="POST">
            <div class="mb-6">
              <label for="name" class="block mb-2 text-sm text-white">Nome completo</label>
              <input type="text" name="name" placeholder="Digite aqui seu nome" class="w-full px-3 py-2 placeholder-gray-600 border border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>
            <div class="mb-6">
              <label for="email" class="block mb-2 text-white">Email</label>
              <input type="email" name="email" placeholder="Digite aqui seu email" required class="w-full px-3 py-2 placeholder-gray-600 border border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>
            <div class="mb-6">
              <label for="phone" class="text-sm text-white">Seu WhatsApp</label>
              <input type="text" name="whatsapp" placeholder="Digite aqui seu número" required class="w-full px-3 py-2 placeholder-gray-600 border border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
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
  <?php include "../components/footer.php"; ?>
  <script src="./assets/js/dark_mode.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper_banners", {
      slidesPerView: 1.0
    });
  </script>
</body>

</html>