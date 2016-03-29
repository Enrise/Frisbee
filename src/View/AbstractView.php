<?php

namespace Frisbee\View;

use Frisbee\Flingable;

abstract class AbstractView extends Flingable
{
    protected $vars;

    public function __construct($vars)
    {
        $this->vars = $vars;
    }

    public function next()
    {
        // This is a view, we are probably done here.
    }
}
