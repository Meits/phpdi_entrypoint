<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 10:44
 */

use App\Classes\Libs\Mailer;
use App\Classes\Services\UserManager;
use Psr\Container\ContainerInterface;

return [
    'UserManager' => function (ContainerInterface $c) {
        return new UserManager($c->get('Mailer'));
    },

    'Mailer' => DI\factory(function () {
        return new Mailer();
    }),

    'ProductService' => DI\factory(function () {
        return new \App\Classes\Services\ProductService();
    }),

];