<?php declare(strict_types=1);

namespace Hyperized\Clamd\Commands;

use Hyperized\Clamd\Abstracts\BasicCommand;

class Stats extends BasicCommand
{
    // Not every server seems to support this command (tested: ClamAV 0.102.1/25712/Fri Jan 31 11:40:00 2020)
    public static $command = 'STATS';
}
