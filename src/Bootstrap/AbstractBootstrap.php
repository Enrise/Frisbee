<?php

namespace Frisbee\Bootstrap;

use Frisbee\Application;
use Frisbee\Exception\Flingable;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

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

    public function next()
    {
        // assume match is an array, because otherwise it would throw an exception
        $matchedRoute = $this->getRoute();

        $controllerClass = $matchedRoute['controller'];
        if (strpos($controllerClass, '\\') === false) {
            $controllerClass = 'App\\Controllers\\' . $controllerClass;
        }

        throw new $controllerClass($this);
    }

    protected function getRoute()
    {
        $routeConfig = $this->application->getConfig('routes');
        $context = new RequestContext('/');
        $matcher = new UrlMatcher($routeConfig, $context);

        return $matcher->match($_SERVER['REQUEST_URI']);
    }
}
