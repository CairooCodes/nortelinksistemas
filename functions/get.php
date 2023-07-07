<?php

function getAllFunctions()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsFarmacia()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 2 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBanners()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM banners order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategories()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
