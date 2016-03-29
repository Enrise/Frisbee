<?php

namespace App\View;

use Frisbee\View\AbstractView;

class Index extends AbstractView
{
    public function run()
    {
        echo '<h1>' . $this->vars['title'] . '</h1>';
    }
}
