<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 10:21
 */

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(require __DIR__ . '/dependencies.php');
return $builder->build();