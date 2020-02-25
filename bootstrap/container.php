<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 10:21
 */

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(require __DIR__ . '/dependencies.php');

$builder->useAutowiring(false);
$builder->useAnnotations(true);
return $builder->build();