<?php

namespace Hoangm\Pattern\Template;

use Hoangm\Pattern\Template\AbstractReport;

class XLSXReport extends AbstractReport {
    protected function generateHeader() {
        echo "XLSX Header" . PHP_EOL;
    }

    protected function generateBody() {
        echo "XLSX Body" . PHP_EOL;
    }

    protected function generateFooter() {
        echo "XLSX Footer" . PHP_EOL;
    }

    public function exportXLSXReport() {
        echo "Export XLSX Report" . PHP_EOL;
    }
}