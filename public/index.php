<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 10:18
 */

require  __DIR__ . '/../vendor/autoload.php';

/*$container = new DI\Container();
$userManager = $container->get('App\Classes\Services\UserManager');
$userManager->register('asdasd','asdasd');*/


/** @var \Psr\Container\ContainerInterface $container */
$app = require __DIR__ . '/../bootstrap/container.php';

//$userManager = $app->get('App\Classes\Services\UserManager');
$userManager = $app->get('UserManager');
$userManager->register('asdasd','asdasd');

$productService = $app->get('ProductService');
$productService->save();