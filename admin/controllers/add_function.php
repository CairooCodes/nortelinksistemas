<?php
require "../../db_config.php";

$name = $_POST['name'];
$description = $_POST['description'];
$categorie_id = $_POST['categorie_id'];
$img = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $img = file_get_contents($_FILES['img']['tmp_name']);
}


$sql = "INSERT INTO functions (name, description, img, categorie_id) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$img_lob = $img . PDO::PARAM_LOB;
$stmt->execute([$name, $description, $img_lob, $categorie_id]);
header('Location: ../dashboard.php');
