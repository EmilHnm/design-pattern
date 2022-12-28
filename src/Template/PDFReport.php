<?php

namespace Hoangm\Pattern\Template;

use Hoangm\Pattern\Template\AbstractReport;

class PDFReport extends AbstractReport {
    protected function generateHeader() {
        echo "PDF Header" . PHP_EOL;
    }

    protected function generateBody() {
        echo "PDF Body" . PHP_EOL;
    }

    protected function generateFooter() {
        echo "PDF Footer" . PHP_EOL;
    }

    public function exportPDFReport() {
        echo "Export PDF Report" . PHP_EOL;
    }
}