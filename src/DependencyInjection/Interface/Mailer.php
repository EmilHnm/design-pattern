<?php

namespace Hoangm\Pattern\DependencyInjection\Interface;

interface Mailer
{
    public function send($to, $subject, $body);
}