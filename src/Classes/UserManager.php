<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 11:54
 */

namespace App\Classes;


class UserManager
{
    private $mailer;

    /**
     * UserManager constructor.
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email, $password)
    {
        // The user just registered, we create his account
        // ...

        // We send him an email to say hello!
        $this->mailer->mail($email, 'Hello and welcome!');
    }
}