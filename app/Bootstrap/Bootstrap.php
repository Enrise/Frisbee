<?php

namespace App\Bootstrap;

use Frisbee\Bootstrap\AbstractBootstrap;

class Bootstrap extends AbstractBootstrap
{
    public function run()
    {
        define('APP_ROOT', dirname(dirname(__DIR__)));
    }
}
