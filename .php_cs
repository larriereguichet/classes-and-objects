<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(array(__DIR__))
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        'header_comment',
        'align_equals',
        'align_double_arrow',
        'newline_after_open_tag',
        'ordered_use',
        'phpdoc_order',
        'short_echo_tag',
        'concat_with_spaces'
    ))
    ->setUsingCache(true)
    ->finder($finder)
;
