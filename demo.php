<?php

include 'vendor/autoload.php';

use Hyperized\Clamd\Client;

$client = new Client('tcp://127.0.0.1:3310');

var_dump($client->version()->get());
var_dump($client->ping()->get());
var_dump($client->stats()->get());

