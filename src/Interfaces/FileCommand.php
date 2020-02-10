<?php declare(strict_types=1);

namespace Hyperized\Clamd\Interfaces;

interface FileCommand
{
    public function __construct(string $uri, string $filename);

    public function get();
}