<?php

namespace Frisbee\Exception;

use Exception;

abstract class Flingable extends Exception
{
    /**
     * The registry of resources.
     *
     * @var array
     */
    protected $resources = [];

    abstract public function run();
    abstract public function next();

    public function setResource($key, $value)
    {
        $this->resources[$key] = $value;
    }
}
