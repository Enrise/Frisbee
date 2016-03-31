<?php

namespace Frisbee\View;

use Frisbee\Exception\Flingable;

abstract class AbstractView extends Flingable
{
    protected $vars;

    public function __construct($vars)
    {
        $this->vars = $vars;
    }

    public function next()
    {
        // This is a view, we probably don't need a next.
    }
}
