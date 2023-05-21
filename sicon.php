<?php
require "db_config.php";
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
	<?php include "components/banners.php"; ?>
	<?php include "components/servicos.php"; ?>
	<div class="flex items-center min-h-screen p-3 md:p-0" id="saiba-mais">
		<div class="container mx-auto">
			<div class="max-w-xl mx-auto md:my-5 form-home p-2 md:p-5 rounded-md shadow-sm">
				<div class="text-center">
					<h1 class="my-3 text-lg md:text-2xl font-semibold">GESTÃO COMERCIAL INTEGRADA PARA VAREJO E ATACADO</h1>
					<p>Preencha o formulário para mais informações</p>
				</div>
				<div class="m-7">
					<form action="./config/api/create_users.php" method="POST">
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
	<section class="pt-10">
		<img class="hidden lg:block w-full" src="<?php echo $URI->base("/admin/uploads/banners/banner1desk.jpg"); ?>" />
		<img class="lg:hidden block w-full" src="<?php echo $URI->base("/admin/uploads/banners/bannerodape.jpg"); ?>" />
	</section>
	<?php include "components/footer.php"; ?>

	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".swiper_banners", {
			slidesPerView: 1.0
		});
	</script>
	<script>
		var swiper = new Swiper(".swiper_products", {
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				300: {
					slidesPerView: 1.1,
					spaceBetween: 10,
				},
				640: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},
		});
	</script>
</body>

</html>