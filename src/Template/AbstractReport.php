<?php

namespace Hoangm\Pattern\Template;

abstract class AbstractReport {
    protected $data = array();

    public function __construct($data) {
        $this->data = $data;
    }

    public final function generateReport() {
        $this->generateHeader();
        $this->generateBody();
        $this->generateFooter();
    }

    abstract protected function generateHeader();
    abstract protected function generateBody();
    abstract protected function generateFooter();
}