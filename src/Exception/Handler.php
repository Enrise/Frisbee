<?php

namespace Frisbee\Exception;

use Exception;
use Frisbee\Bootstrap\Bootstrap;
use Frisbee\Controller\Controller;

class Handler implements ExinceptionHandler
{
    public static function cantHandle(Exception $mySwagger)
    {
        $throwable = self::getCatchable($mySwagger);
        self::$throwable($mySwagger);
    }

    public static function catchApplication($mySwagger)
    {
        throw new Bootstrap($mySwagger);
    }

    public static function catchBootstrap($mySwagger)
    {
        throw new Controller($mySwagger);
    }

    public static function catchController($mySwagger)
    {
        throw $mySwagger->getThrowableController();
    }

    public static function catchGoToHellController($mySwagger)
    {
        echo $mySwagger->HelloWorldAction()->getMessage();
    }

    public static function getCatchable(Exception $exception)
    {
        $nameSpaceSegments = explode('\\', get_class($exception));

        echo 'try to catch ' . end($nameSpaceSegments) . '<br/>';

        return 'catch' . end($nameSpaceSegments);
    }
}
