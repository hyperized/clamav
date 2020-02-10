<?php declare(strict_types=1);

namespace Hyperized\Clamd\Interfaces;

interface SimpleCommand
{
    public function __construct(string $uri);

    public function get();
}