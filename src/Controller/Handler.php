<?php namespace Frisbee\Controller;

use Exception;
use Frisbee\Bootstrap\Bootstrap;
use Frisbee\Exception\ExceptionAwareInterface;
use Frisbee\Exception\ExinceptionHandler;

class Handler implements ExinceptionHandler
{
    public static function cantHandle(Exception $e)
    {
        if($e instanceof Bootstrap) {
            throw new Controller($e);
        }
    }

    public static function fling(Exception $exinception) : ExceptionAwareInterface
    {
        // TODO: Implement fling() method.
    }
}