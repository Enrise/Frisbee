<?php

namespace App\Controllers;

use App\View\Index as IndexView;
use Frisbee\Controller\AbstractController;

class Index extends AbstractController
{
    public function run()
    {
        // Logic
    }

    public function next()
    {
        throw new IndexView([
            'title' => 'Hello World',
        ]);
    }
}
