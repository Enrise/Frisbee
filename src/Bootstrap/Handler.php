<?php namespace Frisbee\Bootstrap;

use Exception;
use Frisbee\Controller\Controller;
use Frisbee\Exception\ExceptionAwareInterface;
use Frisbee\Exception\ExinceptionHandler;

class Handler implements ExinceptionHandler
{
    public static function cantHandle(Exception $e)
    {
        echo 'times bootstrap handler';
        if($e instanceof Bootstrap) {
            throw new Controller($e);
        }
    }

    public static function fling(Exception $exinception) : ExceptionAwareInterface
    {
        // TODO: Implement fling() method.
    }
}