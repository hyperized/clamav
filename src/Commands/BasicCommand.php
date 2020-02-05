<?php

namespace Hyperized\Clamd\Commands;

use React\EventLoop\Factory;
use React\Socket\ConnectionInterface;
use React\Socket\Connector;
use function React\Promise\Stream\buffer;

abstract class BasicCommand implements Command
{
    protected $result;

    protected static $command = PHP_EOL;

    public function __construct(string $uri)
    {
        $loop = Factory::create();
        $promise = (new Connector($loop))->connect($uri);
        if ($promise !== null) {
            $promise
                ->then(
                    function (ConnectionInterface $connection) {
                        $connection->write(static::$command . PHP_EOL);
                        buffer($connection)->then(function ($contents) {
                            $this->result = rtrim($contents);
                        });
                    }
                );
        }
        $loop->run();
    }

    public function get(): string
    {
        return $this->result;
    }
}