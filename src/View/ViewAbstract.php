<?php

namespace Frisbee\View;

use Frisbee\Flingable;

abstract class ViewAbstract extends Flingable
{
    protected $vars;

    public function __construct($vars)
    {
        $this->vars = $vars;
        parent::__construct('view');
    }

    public function next()
    {
        // This is a view, we are probably done here.
    }
}
