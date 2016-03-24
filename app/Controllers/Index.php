<?php

namespace App\Controllers;

use App\View\Index as IndexView;
use Frisbee\Bootstrap\Bootstrap;
use Frisbee\Flingable;

class Index extends Flingable
{
    public function __construct(Bootstrap $bootstrap)
    {
        parent::__construct($bootstrap);
    }

    public function run()
    {
        echo 'Running the IndexController! <br/>';
    }

    public function next()
    {
        throw new IndexView([
            'title' => 'Hello World',
        ]);
    }
}
