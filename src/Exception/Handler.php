<?php

namespace Frisbee\Exception;

use Exception;
use Frisbee\Throwable;

class Handler implements ExinceptionHandler
{
    public static function cantHandle(Exception $e)
    {
        if ($e instanceof Boomerang) {
            $e->run();
            $e->throwback();
        }

        if ($e instanceof Throwable) {
            $e->run();
            try {
                self::next($e);
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
