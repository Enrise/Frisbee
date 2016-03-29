<?php

namespace App\Bootstrap;

use App\Controllers\Index;
use Frisbee\Bootstrap\AbstractBootstrap;

class Bootstrap extends AbstractBootstrap
{
    public function getRoute()
    {
        // Parse the request and return the possible controller name
        return 'Index';
    }

    public function run()
    {
        // Logic
    }

    public function next()
    {
        throw new Index($this);
    }
}
