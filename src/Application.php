<?php

namespace Frisbee;

use Frisbee\Bootstrap\Bootstrap;

class Application extends Throwable
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
        echo 'Running the application! <br/>';
    }

    public function next()
    {
        throw new Bootstrap($this);
    }
}
