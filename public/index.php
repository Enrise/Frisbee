<?php

require __DIR__ . '/../vendor/autoload.php';

$var = new \Frisbee\Application('aylmao');

try {
    throw $var;
} catch (\Frisbee\Application $app) {
    throw new Frisbee\Bootstrap\Bootstrap($app);
}
