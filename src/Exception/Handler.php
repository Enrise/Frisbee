<?php

namespace Frisbee\Exception;

use Exception;
use Frisbee\Flingable;

class Handler implements HandlerInterface
{
    public static function handle(Exception $e)
    {
        /*if ($e instanceof Boomerang) {
            $e->run();
            $e->throwback();
        }*/

        if ($e instanceof Flingable) {
            $e->run();
            try {
                $e->next();
                exit; // No more exceptions, we are done.
            } catch (Flingable $e) {
                self::handle($e);
            } catch (\Exception $e) {
                die($e->getMessage());
            }

        }

        echo sprintf(
            'An exception of type %s was thrown...',
            get_class($e)
        );
        die;
    }
}
