<?php
namespace App\Controllers;

use Frisbee\Bootstrap\Bootstrap;
use Frisbee\Controller\Controller;
use Frisbee\Controller\View;

class GoToHellController extends \Exception
{
    public function __construct(Bootstrap $bootstrap)
    {
        parent::__construct($bootstrap);
    }

    public function HelloWorldAction()
    {
        throw new View('Hello World');
    }
}
