<?php

namespace Frisbee;

use Exception;

abstract class Flingable extends Exception
{
    abstract public function run();
    abstract public function next();
}
