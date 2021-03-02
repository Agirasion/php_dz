<?php

require 'InterfaceIndex_l2.php';
require 'AbstractItem.php';
require 'ItemDigital.php';
require 'ItemPiece.php';
require 'ItemWeight.php';

$price = 150; // цена за штучный товар
$weight = 1.7;

$products = [
  new ItemPiece ("Штучный", $price),
  new ItemDigital ("Цифровой", $price),
  new ItemWeight ("Весовой", $price, $weight),
];

foreach ($products as $product) {
  echo "Информация о товаре ниже <br>";
  echo 'Наименование товара: "' . $product->getName();

  if ($product->getName() === "Весовой") {
    echo '". Вес товара = ' . $weight . 'кг. Стоимость: ' . $product->getTotalCost() . '<br><hr><br>';
  } else {
    echo '". Стоимость: ' . $product->getTotalCost() . '<br><hr><br>';
  }
}

