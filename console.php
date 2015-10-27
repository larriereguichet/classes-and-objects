#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * @param SplFileInfo $file
 *
 * @return array
 */
function extractCommandInfosFromFile(SplFileInfo $file)
{
    preg_match('/([0-9]{2})-(.*).php/', $file->getFileName(), $parts);

    $parts[0] = strtolower(preg_replace('~(?<=\\w)([A-Z])~', '-$1', $file->getRelativePath()));
    $parts[2] = ucfirst(str_replace('_', ' ', $parts[2]));

    return $parts;
}

$application = new Application();
$finder      = new Finder();
$finder->files()->in(__DIR__ . '/src')->depth('< 2')->name('*.php');

/** @var SplFileInfo $file */
foreach ($finder as $file) {
    list($namespace, $name, $description) = extractCommandInfosFromFile($file);

    $command = new Command($namespace . ':' . $name);
    $command->setCode(function ($input, $output) use ($file) {
        require $file->getPathname();
    });
    $command->setDescription($description);

    $application->add($command);
}

$application->run();
