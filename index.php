<?php

require __DIR__ . '/vendor/autoload.php';

use Partham\core\Router;

Router::start(array_values(array_filter(explode('/', $_SERVER['REQUEST_URI']))), $_SERVER['REQUEST_METHOD']);