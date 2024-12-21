<?php

use App\Entity\Usuario;

require_once "bootstrap.php";
require "src/Usuario.php";

$productRepository = $entityManager->getRepository(Usuario::class);
$products = $productRepository->findAll();

foreach ($products as $product) {
  echo sprintf("-%s\n", $product->getNombre());
}
