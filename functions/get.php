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

function getFunctionsAutorize()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 5 and subcategorie = 1 order by id asc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsCobrar()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 5 and subcategorie = 2 order by id asc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsPermitir()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 5 and subcategorie = 3 order by id asc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsAuditoria()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 5 and subcategorie = 4 order by id asc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsControle()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 5 and subcategorie = 5 order by id asc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsProduto()
{
  global $pdo;
  $stmt = $pdo->prepare("select * from functions where categorie_id = 5 and subcategorie = 6 order by id asc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsSupermercado()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 1 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsCalcados()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 3 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFunctionsConstrucao()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM functions where categorie_id = 4 order by id desc");
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
