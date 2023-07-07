<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categorie_id = $_POST['categorie_id'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $id = $_POST['id'];

    $img = null;

    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $img = file_get_contents($_FILES['img']['tmp_name']);
    }

    updateFunction($id, $name, $img, $description, $categorie_id);
    header('Location: ../dashboard.php');
    exit();
  }
} else {
  header('Location: ../dashboard.php');
  exit();
}
