<?php declare(strict_types=1);

namespace Hyperized\Clamd\Abstracts;

use Hyperized\Clamd\Interfaces\FileCommand;
use Hyperized\Clamd\Traits\GetResult;
use React\EventLoop\Factory;
use React\Socket\ConnectionInterface;
use React\Socket\Connector;
use function React\Promise\Stream\buffer;

abstract class FileScanCommand implements FileCommand
{
    use GetResult;

    public function __construct(string $uri, string $content)
    {
        $loop = Factory::create();
        $promise = (new Connector($loop))->connect($uri);
        if ($promise !== null) {
            $promise
                ->then(
                    function (ConnectionInterface $connection) use ($content) {
                        $connection->write(static::$command . ' ' . $content . PHP_EOL);
                        buffer($connection)->then(function ($contents) {
                            $this->result = rtrim($contents);
                        });
                    }
                );
        }
        $loop->run();
    }
}