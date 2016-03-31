<?php

namespace App\Resource\Fetcher;

use Frisbee\Exception\Boomerang;

class Database extends Boomerang
{
    public function run()
    {
        $this->resource = 'test';
    }
}