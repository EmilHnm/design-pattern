<?php

namespace Hoangm\Pattern\Template;

use Hoangm\Pattern\Template\AbstractReport;

class CSVReport extends AbstractReport {
    protected function generateHeader() {
        echo "PDF Header" . PHP_EOL;
    }

    protected function generateBody() {
        echo "PDF Body" . PHP_EOL;
    }

    protected function generateFooter() {
        echo "PDF Footer" . PHP_EOL;
    }

    public function exportCSVReport() {
        echo "Export CSV Report" . PHP_EOL;
    }
}