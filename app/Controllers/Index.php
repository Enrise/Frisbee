<?php

namespace App\Controllers;

use Frisbee\Controller\AbstractController;
use App\Resource\Fetcher\Database as DatabaseFetcher;
use Frisbee\View\TwigView;

class Index extends AbstractController
{
    public function run()
    {
        if (!isset($this->resources['db'])) {
            throw new DatabaseFetcher('db', $this);
        }
    }

    public function next()
    {
        throw new TwigView(
            'index.twig',
            [
                'title' => 'Frisbee Framework for Exception Driven Development',
                'message' => 'Frisbee',
                'slogan' => 'Your exceptional project starts here'
            ]
        );
    }
}
