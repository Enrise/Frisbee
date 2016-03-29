<?php

namespace Frisbee\Exception;

use Exception;

class Handler implements HandlerInterface
{
    public static function handle(Exception $e)
    {
        if ($e instanceof Flingable) {
            try {
                $e->run();
                $e->next();
                exit; // No more exceptions, we are done.
            } catch (Flingable $e) {
                self::handle($e);
            } catch (\Exception $e) {
                die($e->getMessage());
            }
        }
    }
}
