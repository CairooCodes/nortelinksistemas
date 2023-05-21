<?php
require "config/helper.php";
require "config/url.class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>


<body>
  <?php include "components/navbar.php"; ?>

  <div class="items-center min-h-screen p-3 md:p-0">
    <div class="flex justify-center p-10">
      <img class="w-56" src="<?php echo $URI->base("/assets/img/$logo"); ?>" class="logo" alt="<?php echo $title; ?>" />
    </div>
    <div class="container mx-auto">
      <div class="max-w-xl mx-auto md:my-5 form-home p-2 md:p-5 rounded-md shadow-sm">
        <div class="text-center">
          <h1 class="my-3 text-md text-justify md:text-2xl font-semibold">Obrigado pelo contato, norte link agradece! Em breve nossa equipe entrará em contato com você</p>
        </div>
      </div>
    </div>
  </div>
  <?php include "components/footer.php"; ?>
</body>

</html>