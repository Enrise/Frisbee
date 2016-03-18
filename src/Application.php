<?php

namespace Frisbee;

class Application extends \Exception
{
    /**
     * @var string
     */
    private $name;

    public function __construct($name)
    {
        parent::__construct($name, 1337);
        $this->name = $name;
    }
}
