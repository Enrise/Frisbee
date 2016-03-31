<?php

namespace Frisbee\Controller;

use Frisbee\Bootstrap\BootstrapInterface;
use Frisbee\Exception\Flingable;

abstract class AbstractController extends Flingable implements ControllerInterface
{
    /**
     * @var BootstrapInterface
     */
    private $bootstrap;

    /**
     * @var string
     */
    protected $method;

    public function __construct(BootstrapInterface $bootstrap, $defaultMethod = 'index')
    {
        $this->bootstrap = $bootstrap;
        $this->method = $defaultMethod;
    }

    public function run()
    {
        // You could implement "middleware" here or load dependencies in your controller by using boomerang
    }

    public function next()
    {
        $dispatchMethod = $this->method . 'Action';
        if (!method_exists($this, $dispatchMethod)) {
            throw new \Exception(
                sprintf('requested method: %s does not exist in controller %s', $dispatchMethod, get_class($this))
            );
        }

        return $this->$dispatchMethod();
    }
}
