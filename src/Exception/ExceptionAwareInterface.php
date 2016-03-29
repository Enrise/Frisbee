<?php

namespace Frisbee\Exception;

interface ExceptionAwareInterface
{
    public function handle(\Exception $exception);
}
