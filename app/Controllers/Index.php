<?php

namespace App\Controllers;

use App\View\Index as IndexView;
use Frisbee\Controller\AbstractController;
use Frisbee\View\TwigView;

class Index extends AbstractController
{
    public function run()
    {
        // Logic
    }

    public function next()
    {
        throw new TwigView(
            'index.twig', [
                'title' => 'Frisbee Framework for Exception Driven Development',
                'message' => 'Frisbee',
                'slogan' => 'Your exceptional project starts here'
            ]
        );
    }
}
