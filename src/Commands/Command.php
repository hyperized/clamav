<?php

namespace Hyperized\Clamd\Commands;

interface Command
{
    public function __construct(string $uri);

    public function get();
}