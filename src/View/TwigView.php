<?php

namespace Frisbee\View;

use Twig_Environment;
use Twig_Loader_Filesystem;

class TwigView extends AbstractView
{
    /**
     * @var Twig_Environment
     */
    protected $twig;

    /**
     * @var string
     */
    protected $templateName;

    public function __construct($template, $vars)
    {
        parent::__construct($vars);
        $this->loadTwig();
        $this->templateName = $template;
    }

    protected function loadTwig()
    {
        $twigConfig = $this->loadTwigConfig();
        $loader = new Twig_Loader_Filesystem($twigConfig['template_path']);
        $this->twig = new Twig_Environment($loader);
    }

    public function run()
    {
        echo $this->twig->render($this->templateName, $this->vars);
    }

    protected function loadTwigConfig()
    {
        // TODO: we need a boomerang implemenation here to load the twig path configuration from the application
        return ['template_path' => getcwd().'/resources/views'];
    }
}
