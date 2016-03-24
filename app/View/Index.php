<?php

namespace App\View;

use Frisbee\View\ViewAbstract;

class Index extends ViewAbstract
{
    public function run()
    {
        echo 'Running the IndexView! <br/>';

        echo '<h1>' . $this->vars['title'] . '</h1>';
    }
}
