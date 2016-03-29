<?php

namespace Frisbee\View;

use App\Resource\Fetcher\Template as TemplateFetcher;

class TwigView extends AbstractView
{
    /**
     * @var string
     */
    protected $templateName;

    public function __construct($template, $vars)
    {
        $this->templateName = $template;
        parent::__construct($vars);
    }

    public function run()
    {
        if (!isset($this->resources['template'])) {
            throw new TemplateFetcher('template', $this);
        }
        $template = $this->resources['template'];
        echo $template->render($this->templateName, $this->vars);
    }
}
