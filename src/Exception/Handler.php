<?php

namespace Frisbee\Exception;

use Exception;
use Frisbee\Bootstrap\Bootstrap;
use Frisbee\Controller\Controller;

class Handler implements ExinceptionHandler
{
    public static function cantHandle(Exception $mySwagger)
    {
        $throwable = self::getThrowable($mySwagger);
        self::$throwable($mySwagger);
    }

    public static function throwApplication($mySwagger)
    {
        throw new Bootstrap($mySwagger);
    }

    public static function throwBootstrap($mySwagger)
    {
        throw new Controller($mySwagger);
    }

    public static function throwController($mySwagger)
    {
        throw $mySwagger->getThrowableController();
    }

    public static function throwGoToHellController($mySwagger)
    {
        echo($mySwagger->HelloWorldAction()->getMessage()); exit;
    }

    public static function getThrowable(Exception $exception)
    {

        $nameSpaceSegments = explode('\\', get_class($exception));

        echo 'try to catch ' . end($nameSpaceSegments) . "<br/>";
        return 'throw' . end($nameSpaceSegments);
    }
}
