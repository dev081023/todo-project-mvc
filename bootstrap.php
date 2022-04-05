<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [
  'src/Models',
];
$isDevMode = false;

// the connection configuration
$dbParams = array(
  'driver' => 'pdo_mysql',
  'host' => 'db',
  'user' => getenv('DB_USERNAME_ROOT'),
  'password' => getenv('DB_PASSWORD_ROOT'),
  'dbname' => getenv('DB_DATABASE'),
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
global $entityManager;
$entityManager = EntityManager::create($dbParams, $config);

function getEntityManager(): EntityManager
{
  global $entityManager;
  return $entityManager;
}