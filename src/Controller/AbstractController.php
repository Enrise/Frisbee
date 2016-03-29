<?php

namespace Frisbee\Controller;

use Frisbee\Bootstrap\BootstrapInterface;
use Frisbee\Flingable;

abstract class AbstractController extends Flingable implements ControllerInterface
{
    /**
     * @var BootstrapInterface
     */
    private $bootstrap;

    private $throwableController;

    public function __construct(BootstrapInterface $bootstrap)
    {
        $this->bootstrap = $bootstrap;
        $this->initialize($bootstrap);
    }

    private function initialize(BootstrapInterface $bootstrap)
    {
        // $controllerName = 'App\\Controllers\\' . $this->bootstrap->getRoute();
        // $this->throwableController = new $controllerName($bootstrap);
    }
}
