<?php

namespace Frisbee;

use App\Bootstrap\Bootstrap;

class Application extends Flingable
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

    public function run()
    {
        // Start of the Frisbee framework
    }

    public function next()
    {
        throw new Bootstrap($this);
    }
}
