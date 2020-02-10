<?php declare(strict_types=1);

namespace Hyperized\Clamd\Commands;

use Hyperized\Clamd\Abstracts\FileScanCommand;

class InStream extends FileScanCommand
{
    public static $command = 'INSTREAM';
}