<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];


    if (updateCategorie($id, $name));
    header('Location: ../categorias.php');
    exit();
  }
} else {
  header('Location: ../categorias.php');
  exit();
}

