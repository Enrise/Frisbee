<?php

namespace App\Resource\Fetcher;

use Frisbee\Exception\Boomerang;
use Twig_Environment;
use Twig_Loader_Filesystem;

class Template extends Boomerang
{
    public function run()
    {
        $twigConfig = $this->getConfig();
        $loader = new Twig_Loader_Filesystem($twigConfig['template_path']);
        $this->resource = new Twig_Environment($loader);
    }

    public function getConfig()
    {
        return ['template_path' => APP_ROOT . '/resources/views'];
    }
}