<?php

namespace Frisbee\Bootstrap;

use App\Controllers\Index;
use Frisbee\Application;
use Frisbee\Flingable;

class Bootstrap extends Flingable
{
    /**
     * @var Application
     */
    private $application;

    public function __construct(Application $application = null)
    {
        $this->application = $application;
    }

    public function getRoute()
    {
        // Parse the request and return the possible controller name
        return 'Index';
    }

    public function run()
    {
        echo 'Running the bootstrap! <br/>';
    }

    public function next()
    {
        throw new Index($this);
    }
}
