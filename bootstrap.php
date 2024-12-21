<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
  paths: [__DIR__ . '/src'],
  isDevMode: TRUE,
);

// configuring the database connection
$connection = DriverManager::getConnection([
  'driver' => 'pdo_mysql',
  'host' => 'db',
  'user' => 'db',
  'password' => 'db',
  'dbname' => 'db',
  'charset' => 'utf8',
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
$templates = new League\Plates\Engine('/views');