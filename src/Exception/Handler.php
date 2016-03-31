<?php

namespace Frisbee\Exception;

use Cowsayphp\Cow;
use Exception;
use Twig_Environment;
use Twig_Loader_Filesystem;

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
            } catch (Exception $e) {
                $loader = new Twig_Loader_Filesystem(APP_ROOT . '/resources/views');
                $twig = new Twig_Environment($loader);
                echo $twig->render(
                    'error.twig',
                    [
                        'message' => Cow::say($e->getMessage()),
                    ]
                );
                die;
            }
        }
    }
}
