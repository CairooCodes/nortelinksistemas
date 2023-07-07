<?php
function updateCategorie($id, $name)
{
  global $pdo;
  if ($id) {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateBanner($id, $name, $img)
{
  global $pdo;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $pdo->prepare("UPDATE banners SET name = :name, img = :img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE banners SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateFunction($id, $name, $img, $description, $categorie_id)
{
  global $pdo;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $pdo->prepare("UPDATE functions SET name = :name, img = :img, description = :description, categorie_id = :categorie_id WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE functions SET name = :name, description= :description, categorie_id = :categorie_id WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}