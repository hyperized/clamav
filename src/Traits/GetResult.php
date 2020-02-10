<?php

namespace Hyperized\Clamd\Traits;

use InvalidArgumentException;

trait GetResult
{
    protected $result;

    protected static $command = PHP_EOL;

    public function get(): string
    {
        if (null === $this->result || '' === $this->result) {
            throw new InvalidArgumentException(get_class($this) . ': No results returned for command.');
        }

        if ('UNKNOWN COMMAND' === $this->result) {
            throw new InvalidArgumentException(get_class($this) . ': Command not supported on server.');
        }

        return $this->result;
    }
}