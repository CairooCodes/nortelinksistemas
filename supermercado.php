<?php
require "db_config.php";
require "functions/get.php";

$functions = getFunctionsSupermercado();
$functionsAutorize = getFunctionsAutorize();
$functionsCobrar = getFunctionsCobrar();
$functionsPermitir = getFunctionsPermitir();
$functionsAuditoria = getFunctionsAuditoria();
$functionsControle = getFunctionsControle();
$functionsProduto = getFunctionsProduto();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Norte Link - SinCom para Supermercado</title>
  <meta property="og:title" content="Norte Link - SinCom Supermercado" />
  <?php include "./components/head_core.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
  <style>
    .read-more-button {
      display: none;
    }

    .content-wrapper {
      overflow: hidden;
    }
  </style>
</head>

<body>
  <?php include "./components/navbar-blue.php"; ?>
  <section class="swiper swiper_banners lg:w-full">
    <div class="swiper-wrapper">
      <div class="w-full swiper-slide">
        <img class="hidden lg:block w-full" src="./assets/img/Banners supermercado2Desktop.jpg" />
        <img class="lg:hidden block w-full" src="./assets/img/Banners_supermercado2mobilecopiar.jpg" />
      </div>
      <div class="w-full swiper-slide">
        <img class="hidden lg:block w-full" src="./assets/img/Banners_supermercadoDesktop.jpg" />
        <img class="lg:hidden block w-full" src="./assets/img/Banners supermercadoMobilecopiar.jpg" />
      </div>
    </div>
    <div class="swiper-button-next text-white"></div>
    <div class="swiper-button-prev text-white"></div>
    <div class="swiper-pagination swiper-pagination-banners-main"></div>
  </section>

  <section class="mx-auto max-w-4xl px-2 pt-4 mt-5 mb-12">
    <div class="grid lg:grid-cols-3 gap-9">
      <?php foreach ($functions as $function) { ?>
        <div>
          <div class="flex items-center justify-center mt-2">
            <?php
            if (!empty($function['img'])) {
              $img = base64_encode($function['img']);
              echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
            }
            ?>
            <h1 class="title-font font-semibold text-center text-md pt-4 px-2">
              <?php echo $function['name']; ?>
            </h1>
          </div>
          <div>
            <div class="card">
              <div class="content-wrapper">
                <p class="content text-black title-font mb-1 text-justify text-lg pt-5">
                  <?php echo $function['description']; ?>
                </p>
              </div>
              <button class="read-more-button text-color1" onclick="showMore(this)">Ler mais</button>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>

  <div class="flex items-center p-3 md:p-0 bg-color2 py-20">
    <div class="container mx-auto">
      <div class="max-w-xl mx-auto md:my-5 bg-white p-2 md:p-5 rounded-md shadow-sm">
        <div class="text-center">
          <h1 class="my-3 text-color2 text-lg md:text-2xl font-semibold">Preencha o formulário para mais informações</h1>
        </div>
        <div class="m-7">
          <form action="../config/api/create_lead_supermercado.php" method="POST">
            <div class="mb-6">
              <label for="name" class="block mb-2 text-sm text-black">Nome completo</label>
              <input type="text" name="name" placeholder="Digite aqui seu nome" class="w-full px-3 py-2 placeholder-gray-600 border border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>
            <div class="mb-6">
              <label for="email" class="block mb-2 text-black">Email</label>
              <input type="email" name="email" placeholder="Digite aqui seu email" required class="w-full px-3 py-2 placeholder-gray-600 border border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
            </div>
            <div class="mb-6">
              <label for="phone" class="text-sm text-black">Seu WhatsApp</label>
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

  <section class="mx-auto max-w-4xl px-2 pt-4 mt-5">
    <h1 class="title-font font-semibold text-center text-4xl pt-4 px-2 mb-16">Nossas outras ferramentas</h1>
    <div>
      <iframe width="849" height="486" src="https://www.youtube.com/embed/yEkZewmUvVs" title="sinCom - Novidades - Authorize" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <h1 class="title-font font-semibold text-xl pt-4 px-2 mb-8 text-center">FORMAS DE AUTORIZAÇÃO</h1>
    <div class="grid lg:grid-cols-3">
      <?php foreach ($functionsAutorize as $Autorize) { ?>
        <div class="">
          <div class="flex items-center justify-center">
            <?php
            if (!empty($Autorize['img'])) {
              $img = base64_encode($Autorize['img']);
              echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
            }
            ?>
            <h1 class="title-font font-semibold text-center text-lg pt-4 px-2">
              <?php echo $Autorize['name']; ?>
            </h1>
          </div>
          <div>
            <h1 class="title-font mb-1 text-center text-lg pt-5">
              <?php echo $Autorize['description']; ?>
            </h1>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div>
      <iframe width="849" height="486" src="https://www.youtube.com/embed/CLw0eHree2g" title="sinCom - Cobrança - Parte #1 - Objetivo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <h1 class="title-font font-semibold text-xl pt-8 px-2 mb-8 text-center">MODULO DE COBRANÇA</h1>
    <div class="grid lg:grid-cols-2 gap-9">
      <?php foreach ($functionsCobrar as $Cobrar) { ?>
        <div class="">
          <div class="flex items-center justify-center">
            <?php
            if (!empty($Cobrar['img'])) {
              $img = base64_encode($Cobrar['img']);
              echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
            }
            ?>
            <h1 class="title-font font-semibold text-center text-lg pt-4 px-2">
              <?php echo $Cobrar['name']; ?>
            </h1>
          </div>
          <div>
            <h1 class="title-font mb-1 text-center text-lg pt-5">
              <?php echo $Cobrar['description']; ?>
            </h1>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <h1 class="title-font font-semibold text-xl pt-4 px-2 mb-8 text-center">PERMISSÕES</h1>
    <div class="grid lg:grid-cols-2 gap-9">
      <?php foreach ($functionsPermitir as $Permitir) { ?>
        <div class="">
          <div class="flex items-center justify-center">
            <?php
            if (!empty($Permitir['img'])) {
              $img = base64_encode($Permitir['img']);
              echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
            }
            ?>
            <h1 class="title-font font-semibold text-center text-lg pt-4 px-2">
              <?php echo $Permitir['name']; ?>
            </h1>
          </div>
          <div>
            <h1 class="title-font mb-1 text-center text-lg pt-5">
              <?php echo $Permitir['description']; ?>
            </h1>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="grid lg:grid-cols-2 pt-20">
      <?php foreach ($functionsAuditoria as $Auditoria) { ?>
        <div class="">
          <div class="flex items-center justify-center">
            <?php
            if (!empty($Auditoria['img'])) {
              $img = base64_encode($Auditoria['img']);
              echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
            }
            ?>
            <h1 class="title-font font-semibold text-center text-lg pt-4 px-2">
              <?php echo $Auditoria['name']; ?>
            </h1>
          </div>
          <div>
            <h1 class="title-font mb-1 text-center text-lg pt-5">
              <?php echo $Auditoria['description']; ?>
            </h1>
          </div>
        </div>
      <?php
      }
      ?>
      <?php foreach ($functionsControle as $Controle) { ?>
        <div class="">
          <div class="flex items-center justify-center">
            <?php
            if (!empty($Controle['img'])) {
              $img = base64_encode($Controle['img']);
              echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
            }
            ?>
            <h1 class="title-font font-semibold text-center text-lg pt-4 px-2">
              <?php echo $Controle['name']; ?>
            </h1>
          </div>
          <div>
            <h1 class="title-font mb-1 text-center text-lg pt-5">
              <?php echo $Controle['description']; ?>
            </h1>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <h1 class="title-font font-semibold text-xl pt-16 px-2 mb-8 text-center">LEGENDA DE CORES</h1>
    <div class="grid lg:grid-cols-1 gap-9 pb-10">
      <?php foreach ($functionsProduto as $Produto) { ?>
        <div class="">
          <div class="flex items-center justify-center">
            <?php
            if (!empty($Produto['img'])) {
              $img = base64_encode($Produto['img']);
              echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
            }
            ?>
            <h1 class="title-font font-semibold text-center text-lg pt-4 px-2">
              <?php echo $Produto['name']; ?>
            </h1>
          </div>
          <div>
            <h1 class="title-font mb-1 text-center text-lg pt-5">
              <?php echo $Produto['description']; ?>
            </h1>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>

  <?php include "./components/footer.php"; ?>
  <script src="./assets/js/dark_mode.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    function showMore(button) {
      const card = button.parentElement;
      const content = card.querySelector('.content');
      const buttonText = button.textContent;
      if (buttonText === 'Ler mais') {
        content.style.maxHeight = 'none';
        button.textContent = 'Ler menos';
      } else {
        content.style.maxHeight = '6em';
        button.textContent = 'Ler mais';
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.card');
      cards.forEach(function(card) {
        const content = card.querySelector('.content');
        const readMoreButton = card.querySelector('.read-more-button');
        content.style.maxHeight = '6em';
        if (content.scrollHeight > content.clientHeight) {
          readMoreButton.style.display = 'block';
        }
      });
    });
  </script>
  <script>
    var swiper = new Swiper(".swiper_banners", {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination-banners-main",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".swiper_banners_2", {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination-banners",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script>
    var swiperup = new Swiper(".mySwiper-tumb", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper-tumbUpper", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiperup,
      },
    });
  </script>
</body>

</html>