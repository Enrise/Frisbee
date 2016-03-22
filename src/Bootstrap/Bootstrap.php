<?php

namespace Frisbee\Bootstrap;

use App\Controllers\GoToHellController;
use Frisbee\Application;
use Frisbee\Throwable;

class Bootstrap extends Throwable
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
        return 'GoToHell';
    }

    public function run()
    {
        echo 'Running the bootstrap! <br/>';
    }

    public function next()
    {
        throw new GoToHellController($this);
    }
}
