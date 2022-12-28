<?php

namespace Hoangm\Pattern\DependencyInjection;

use Hoangm\Pattern\DependencyInjection\Interface\Mailer;

class UserController
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email, $password)
    {
        $this->mailer->send($email, 'Welcome to our website!', 'Thank you for registering.');
    }
}