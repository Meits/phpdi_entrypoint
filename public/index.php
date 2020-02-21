<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 10:18
 */

require  __DIR__ . '/../vendor/autoload.php';
/** @var \Psr\Container\ContainerInterface $container */
$app = require __DIR__ . '/../bootstrap/container.php';


$userManager = $app->get('App\Classes\UserManager');
$userManager = $app->get('UserManager');
$userManager->register('asdasd','asdasd');
