<?php

require __DIR__ . '/../vendor/autoload.php';
chdir(dirname(__DIR__ . '..' . DIRECTORY_SEPARATOR));

throw new \Frisbee\Application('myApp');