<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 3/18/16
 * Time: 8:37 PM.
 */

namespace Frisbee\Exception;

use Exception;

interface HandlerInterface
{
    public static function handle(Exception $e);
}
