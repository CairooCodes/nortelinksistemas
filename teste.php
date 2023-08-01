<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibir Parágrafo com Botão</title>
  <style>
    .card {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
    }

    .read-more-button {
      display: none;
    }
  </style>
</head>

<body>
  <div class="card">
    <p class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum aliquam magna, non scelerisque quam efficitur sit amet. Sed tincidunt tincidunt mi, eu feugiat lorem blandit sit amet. Integer ut nibh at enim tempor consequat non vel ipsum. Sed malesuada orci at nunc vulputate eleifend. Nullam dapibus nisi ut aliquam finibus. Sed scelerisque ipsum eu arcu blandit faucibus. Integer iaculis arcu ligula, nec feugiat lorem ultrices at. Sed volutpat justo nec mi blandit, et dignissim velit fermentum. Sed eu orci a arcu malesuada hendrerit at ac nibh. Vivamus pharetra ut mauris eu tincidunt. Integer eget purus eget massa dictum accumsan vitae eu felis. Proin id sapien a elit viverra dictum eu non nunc. Quisque euismod, neque nec egestas dapibus, nisl elit dictum dui, id varius libero nisi ac elit. Curabitur pharetra volutpat mauris eget tincidunt.
    </p>
    <button class="read-more-button" onclick="showMore(this)">Ler mais</button>
  </div>

  <div class="card">
    <p class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum aliquam magna, non scelerisque quam efficitur sit amet. Sed tincidunt tincidunt mi, eu feugiat lorem blandit sit amet. Integer ut nibh at enim tempor consequat non vel ipsum. Sed malesuada orci at nunc vulputate eleifend. Nullam dapibus nisi ut aliquam finibus. Sed scelerisque ipsum eu arcu blandit faucibus. Integer iaculis arcu ligula, nec feugiat lorem ultrices at. Sed volutpat justo nec mi blandit, et dignissim velit fermentum. Sed eu orci a arcu malesuada hendrerit at ac nibh. Vivamus pharetra ut mauris eu tincidunt. Integer eget purus eget massa dictum accumsan vitae eu felis. Proin id sapien a elit viverra dictum eu non nunc. Quisque euismod, neque nec egestas dapibus, nisl elit dictum dui, id varius libero nisi ac elit. Curabitur pharetra volutpat mauris eget tincidunt.
    </p>
    <button class="read-more-button" onclick="showMore(this)">Ler mais</button>
  </div>
  <div class="card">
    <p class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum aliquam magna, non scelerisque quam efficitur sit amet. Sed tincidunt tincidunt mi, eu feugiat lorem blandit sit amet. Integer ut nibh at enim tempor consequat non vel ipsum. Sed malesuada orci at nunc vulputate eleifend. Nullam dapibus nisi ut aliquam finibus. Sed scelerisque ipsum eu arcu blandit faucibus. Integer iaculis arcu ligula, nec feugiat lorem ultrices at. Sed volutpat justo nec mi blandit, et dignissim velit fermentum. Sed eu orci a arcu malesuada hendrerit at ac nibh. Vivamus pharetra ut mauris eu tincidunt. Integer eget purus eget massa dictum accumsan vitae eu felis. Proin id sapien a elit viverra dictum eu non nunc. Quisque euismod, neque nec egestas dapibus, nisl elit dictum dui, id varius libero nisi ac elit. Curabitur pharetra volutpat mauris eget tincidunt.
    </p>
    <button class="read-more-button" onclick="showMore(this)">Ler mais</button>
  </div>
  <div class="card">
    <p class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum aliquam magna, non scelerisque quam efficitur sit amet. Sed tincidunt tincidunt mi, eu feugiat lorem blandit sit amet. Integer ut nibh at enim tempor consequat non vel ipsum. Sed malesuada orci at nunc vulputate eleifend. Nullam dapibus nisi ut aliquam finibus. Sed scelerisque ipsum eu arcu blandit faucibus. Integer iaculis arcu ligula, nec feugiat lorem ultrices at. Sed volutpat justo nec mi blandit, et dignissim velit fermentum. Sed eu orci a arcu malesuada hendrerit at ac nibh. Vivamus pharetra ut mauris eu tincidunt. Integer eget purus eget massa dictum accumsan vitae eu felis. Proin id sapien a elit viverra dictum eu non nunc. Quisque euismod, neque nec egestas dapibus, nisl elit dictum dui, id varius libero nisi ac elit. Curabitur pharetra volutpat mauris eget tincidunt.
    </p>
    <button class="read-more-button" onclick="showMore(this)">Ler mais</button>
  </div>
  <div class="card">
    <p class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum aliquam magna, non scelerisque quam efficitur sit amet. Sed
    </p>
    <button class="read-more-button" onclick="showMore(this)">Ler mais</button>
  </div>

  <script>
    function showMore(button) {
      const card = button.parentElement;
      const content = card.querySelector('.content');
      const buttonText = button.textContent;
      if (buttonText === 'Ler mais') {
        content.style.maxHeight = 'none';
        button.textContent = 'Ler menos';
      } else {
        content.style.maxHeight = '3em'; // Altura para exibir apenas as 3 primeiras linhas
        button.textContent = 'Ler mais';
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.card');
      cards.forEach(function(card) {
        const content = card.querySelector('.content');
        const readMoreButton = card.querySelector('.read-more-button');
        content.style.maxHeight = '3em'; // Altura inicial para exibir apenas as 3 primeiras linhas
        if (content.scrollHeight > content.clientHeight) {
          readMoreButton.style.display = 'block';
        }
      });
    });
  </script>
</body>

</html>