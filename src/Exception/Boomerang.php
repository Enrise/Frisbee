<?php

namespace Frisbee\Exception;

abstract class Boomerang extends Flingable
{
    /**
     * The previous exception
     *
     * @var Flingable
     */
    protected $previous;

    /**
     * @var mixed
     */
    protected $resource;

    public function __construct($key, Flingable $previous)
    {
        $this->previous = $previous;
        $this->run();
        $previous->setResource($key, $this->resource);
    }

    public function next()
    {
        throw $this->previous; // Right back at ya!
    }
}
