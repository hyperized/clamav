<?php declare(strict_types=1);

namespace Hyperized\Clamd\Commands;

use Hyperized\Clamd\Abstracts\BasicCommand;

class Shutdown extends BasicCommand
{
    public static $command = 'SHUTDOWN';
}