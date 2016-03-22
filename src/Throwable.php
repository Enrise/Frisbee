<?php

namespace Frisbee;

use Exception;

abstract class Throwable extends Exception
{
    abstract public function run();
    abstract public function next();
}
