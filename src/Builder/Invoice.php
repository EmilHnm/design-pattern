<?php

namespace Hoangm\Pattern\Builder;

class Invoice
{
    private $header;
    private $body;

    public function __construct($header, $body)
    {
        $this->header = $header;
        $this->body = $body;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getBody()
    {
        return $this->body;
    }
}