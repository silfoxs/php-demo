<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use DI\ContainerBuilder;

date_default_timezone_set('PRC');
define('PROJECT_ROOT', realpath(__DIR__ . './'));

require_once PROJECT_ROOT . 'vendor/autoload.php';

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/config.php');
$container = $containerBuilder->build();

return $container;