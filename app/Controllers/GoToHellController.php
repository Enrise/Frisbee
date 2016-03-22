<?php

namespace App\Controllers;

use Frisbee\Bootstrap\Bootstrap;
use Frisbee\Controller\View;
use Frisbee\Throwable;

class GoToHellController extends Throwable
{
    public function __construct(Bootstrap $bootstrap)
    {
        parent::__construct($bootstrap);
    }

    public function HelloWorldAction()
    {
        throw new View('Hello World');
    }

    public function run()
    {
        echo 'Running the gotoHellController! <br/>';
    }

    public function next()
    {
        throw new View('Hello World');
    }
}
