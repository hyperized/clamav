<?php declare(strict_types=1);

namespace Hyperized\Clamd;

use Hyperized\Clamd\Commands\InStream;
use Hyperized\Clamd\Commands\Ping;
use Hyperized\Clamd\Commands\Reload;
use Hyperized\Clamd\Commands\Scan;
use Hyperized\Clamd\Commands\Shutdown;
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

    public function ping(): Ping
    {
        return new Ping($this->uri);
    }

    public function version(): Version
    {
        return new Version($this->uri);
    }

    public function reload(): Reload
    {
        return new Reload($this->uri);
    }

    public function shutdown(): Shutdown
    {
        return new Shutdown($this->uri);
    }

    public function stats(): Stats
    {
        return new Stats($this->uri);
    }

    public function scan(string $filename): Scan
    {
        return new Scan($this->uri, $filename);
    }

    public function inStream(string $content): InStream
    {
        return new InStream($this->uri, $content);
    }
}