<?php

namespace Frisbee\Bootstrap;

use Frisbee\Application;
use Frisbee\Flingable;

abstract class AbstractBootstrap extends Flingable implements BootstrapInterface
{
    /**
     * @var Application
     */
    private $application;

    public function __construct(Application $application = null)
    {
        $this->application = $application;
    }
}
