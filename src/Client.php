<?php

namespace Hyperized\Clamd;

use Hyperized\Clamd\Commands\Ping;
use Hyperized\Clamd\Commands\Stats;
use Hyperized\Clamd\Commands\Version;

/**
 * Class Client
 * @package Hyperized\Clamd
 *
 * https://www.clamav.net/documents/scanning#clamd
 */
class Client
{
    private $uri;

    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function version(): Version
    {
        return new Version($this->uri);
    }

    public function ping(): Ping
    {
        return new Ping($this->uri);
    }

    public function stats(): Stats
    {
        return new Stats($this->uri);
    }
}