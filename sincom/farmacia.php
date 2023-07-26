<?php
require "../db_config.php";
require "../functions/get.php";

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
	<title>Norte Link - SinCom para Farmácia</title>
	<?php include "../components/head_core.php"; ?>
</head>

<body>
	<?php include "../components/navbar-blue.php"; ?>
	<section>
		<div>
			<img class="hidden lg:block w-full" src="../assets/img/Banners_farmaciaDesktop_copiar.jpg" />
			<img class="lg:hidden block w-full" src="../assets/img/Banners farmaciaMobilecopiar.jpg" />
		</div>
	</section>

	<section class="mx-auto max-w-4xl px-2 pt-4 mt-5 mb-12">
		<div class="grid lg:grid-cols-3 gap-8">
			<?php foreach ($functions as $function) { ?>
				<div class="">
					<div class="flex items-center justify-center mt-2">
						<?php
						if (!empty($function['img'])) {
							$img = base64_encode($function['img']);
							echo "<img width='60' src='data:image/jpeg;base64," . $img . "'>";
						}
						?>
						<h1 class="title-font font-semibold text-center text-lg mt-4 px-2">
							<?php echo $function['name']; ?>
						</h1>
					</div>
					<div>
						<h1 class="title-font mb-1 text-center text-lg pt-5">
							<?php echo $function['description']; ?>
						</h1>
						<!-- <div class="flex justify-center">
							<a href="#">
								<button class="shadow-cla-blue mt-4 mb-4 rounded-full bg-color2 px-4 py-2 text-white drop-shadow-md hover:scale-105">
									Saiba Mais
								</button>
							</a>
						</div> -->
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</section>

	<div class="flex items-center p-3 md:p-0 bg-color2 py-10">
		<div class="container mx-auto">
			<div class="max-w-xl mx-auto md:my-5 bg-white p-2 md:p-5 rounded-md shadow-sm">
				<div class="text-center">
					<h1 class="my-3 text-color2 text-lg md:text-2xl font-semibold">Preencha o formulário para mais informações</h1>
				</div>
				<div class="m-7">
					<form action="../config/api/create_lead_farmacia.php" method="POST">
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
    <h1 class="title-font font-semibold text-4xl pt-4 px-2 mb-16 text-center">FORMAS DE AUTORIZAÇÃO</h1>
    <div class="grid lg:grid-cols-3 gap-9">
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
            <div class="flex justify-center mt-12 mb-5">
              <a href="#">
                <!-- <button class="shadow-cla-blue mt-4 mb-4 rounded-full bg-color2 px-4 py-2 text-white drop-shadow-md hover:scale-105">
                  Saiba Mais
                </button> -->
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <h1 class="title-font font-semibold text-4xl pt-4 px-2 mb-16 text-center">MODULO DE COBRANÇA</h1>
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
            <div class="flex justify-center mt-12 mb-5">
              <a href="#">
                <!-- <button class="shadow-cla-blue mt-4 mb-4 rounded-full bg-color2 px-4 py-2 text-white drop-shadow-md hover:scale-105">
                  Saiba Mais
                </button> -->
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <h1 class="title-font font-semibold text-4xl pt-4 px-2 mb-16 text-center">PERMISSÕES</h1>
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
            <div class="flex justify-center mt-12 mb-5">
              <a href="#">
                <!-- <button class="shadow-cla-blue mt-4 mb-4 rounded-full bg-color2 px-4 py-2 text-white drop-shadow-md hover:scale-105">
                  Saiba Mais
                </button> -->
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="grid lg:grid-cols-2 gap-4">
      <h1 class="title-font font-semibold text-4xl pt-4 px-2 mb-16 text-center">AUDITORIA</h1>
      <h1 class="title-font font-semibold text-4xl pt-4 px-2 mb-16 text-center">CONTROLE DE DESCONTOS POR NÍVEIS DE CARGOS</h1>
    </div>
    <div class="grid lg:grid-cols-2 gap-9">
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
            <div class="flex justify-center mt-12 mb-5">
              <a href="#">
                <!-- <button class="shadow-cla-blue mt-4 mb-4 rounded-full bg-color2 px-4 py-2 text-white drop-shadow-md hover:scale-105">
                  Saiba Mais
                </button> -->
              </a>
            </div>
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
            <div class="flex justify-center mt-12 mb-5">
              <a href="#">
                <!-- <button class="shadow-cla-blue mt-4 mb-4 rounded-full bg-color2 px-4 py-2 text-white drop-shadow-md hover:scale-105">
                  Saiba Mais
                </button> -->
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <h1 class="title-font font-semibold text-4xl pt-4 px-2 mb-16 text-center">LEGENDA DE CORES</h1>
    <div class="grid lg:grid-cols-1 gap-9">
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
            <div class="flex justify-center mt-12 mb-5">
              <a href="#">
                <!-- <button class="shadow-cla-blue mt-4 mb-4 rounded-full bg-color2 px-4 py-2 text-white drop-shadow-md hover:scale-105">
                  Saiba Mais
                </button> -->
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>

	<?php include "../components/footer.php"; ?>

	<script src="./assets/js/dark_mode.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>