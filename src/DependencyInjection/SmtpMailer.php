<?php

namespace Hoangm\Pattern\DependencyInjection;

use Hoangm\Pattern\DependencyInjection\Interface\Mailer;

class SmtpMailer implements Mailer
{
    private $host;
    private $port;
    private $username;
    private $password;

    public function __construct($host, $port, $username, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function send($to, $subject, $body)
    {
        echo "Send mail to $to with subject: $subject and body: $body";
    }
}