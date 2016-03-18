<?php

namespace Frisbee\Bootstrap;

use Frisbee\Application;

class Bootstrap extends \Exception
{
    /**
     * @var Application
     */
    private $application;

    public function __construct($application = null)
    {
        $this->application = $application;
        $this->initialize();
    }

    private function initialize()
    {
        // create the route
        // load config
        // initialize something
    }

    public function getRoute()
    {
        // Parse the request and return the possible controller name
        return 'GoToHell';
    }
}
