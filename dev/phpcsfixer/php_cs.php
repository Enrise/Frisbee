<?php

return Symfony\CS\Config\Config::create()
    ->fixers(
        [
            'single_blank_line_before_namespace',
            'concat_with_spaces',
        ]
    )
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->exclude('vendor')
            ->exclude('public')
            ->name('*.php')
            ->in(__DIR__)
    )
;
