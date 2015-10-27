#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Finder\SplFileInfo;

function dashize($word) {
    return strtolower(preg_replace('~(?<=\\w)([A-Z])~', '-$1', $word));
}

function extractFilenameParts($filename) {
    preg_match('/([0-9]{2})-(.*).php/', $filename, $parts);

    $parts[1] = strtolower(preg_replace('~(?<=\\w)([A-Z])~', '-$1', $parts[1]));
    $parts[2] = ucfirst(str_replace('_', ' ', $parts[2]));

    return $parts;
}

$application = new Application();
$finder      = new Finder();
$finder->files()->in(__DIR__.'/src')->depth('< 2')->name('*.php');

/** @var SplFileInfo $file */
foreach ($finder as $file) {
    $filenameParts = extractFilenameParts($file->getFileName());

    $command = new Command(dashize($file->getRelativePath()) . ':' . $filenameParts[1]);
    $command->setCode(function ($input, $output) use ($file) {
        require $file->getPathname();
    });
    $command->setDescription($filenameParts[2]);

    $application->add($command);
}

$application->run();
