<?php

namespace Hoangm\Pattern\Builder;

use Hoangm\Pattern\Builder\Invoice;


class InvoiceBuilder
{
    private $header;
    private $body;

    public function setHeader($header)
    {
        $this->header = $header;
    }

    public function addItem($item)
    {
        $this->body[] = $item;
    }

    public function getInvoice()
    {
        return new Invoice($this->header, $this->body);
    }
}