<?php

namespace Frisbee\Exception;

use Exception;
use Frisbee\Flingable;

class Handler implements HandlerInterface
{
    public static function cantHandle(Exception $e)
    {
        /*if ($e instanceof Boomerang) {
            $e->run();
            $e->throwback();
        }*/

        if ($e instanceof Flingable) {
            $e->run();
            try {
                self::next($e);
                exit; // No more exceptions, we are done.
            } catch (Exception $e) {
                self::cantHandle($e);
            }
        }

        echo sprintf(
            'An exception of type %s was thrown...',
            get_class($e)
        );
        die;
    }

    public static function next($e)
    {
        $e->next();
    }
}
