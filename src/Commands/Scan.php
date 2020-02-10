<?php declare(strict_types=1);

namespace Hyperized\Clamd\Commands;

use Hyperized\Clamd\Abstracts\FileScanCommand;

class Scan extends FileScanCommand
{
    public static $command = 'SCAN';
}