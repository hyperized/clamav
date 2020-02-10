<?php declare(strict_types=1);

namespace Hyperized\Clamd\Commands;

use Hyperized\Clamd\Abstracts\BasicCommand;

class Ping extends BasicCommand
{
    protected static $command = 'PING';
}
