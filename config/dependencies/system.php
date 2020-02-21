<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 10:44
 */

use Psr\Container\ContainerInterface;

return [
    'UserManager' => function (ContainerInterface $c) {
        return new \App\Classes\UserManager(new \App\Classes\Mailer());
    },

];