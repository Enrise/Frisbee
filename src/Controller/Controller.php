<?php

namespace Frisbee\Controller;

use Frisbee\Bootstrap\Bootstrap;

class Controller extends \Exception
{
    /**
     * @var Bootstrap
     */
    private $bootstrap;

    private $throwableController;

    public function __construct(Bootstrap $bootstrap)
    {
        $this->bootstrap = $bootstrap;
        $this->initialize($bootstrap);
    }

    private function initialize($bootstrap)
    {
        $controllerName = "App\\Controllers\\" . $this->bootstrap->getRoute() . 'Controller';

        $this->throwableController = new $controllerName($bootstrap);
    }

    /**
     * @return mixed
     */
    public function getThrowableController()
    {
        return $this->throwableController;
    }
}
