<?php declare(strict_types=1);

namespace Surda\PHPCSReport;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Reports\Full;

class PhpStormReport extends Full
{
    /**
     * {@inheritdoc.
     */
    public function generateFileReport($report, File $phpcsFile, $showSources = false, $width = 80): bool
    {
        if (0 === $report['errors'] && 0 === $report['warnings']) {
            return false;
        }

        parent::generateFileReport($report, $phpcsFile, $showSources, $width);

        if (\count($report['messages']) > 1) {
            echo sprintf('✏️  %s:1', $phpcsFile->path) . \PHP_EOL;
        } else {
            echo sprintf('✏️  %s:%d', $phpcsFile->path, key($report['messages'])) . \PHP_EOL;
        }

        return true;
    }
}
