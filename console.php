#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Finder\SplFileInfo;

$application = new Application();
$finder      = new Finder();
$finder->files()->in(__DIR__ . '/src')->depth('< 2')->name('*.php');

/** @var SplFileInfo $file */
foreach ($finder as $file) {
    $command = new Command($file->getRelativePath() . ':' . $file->getFileName());
    $command->setCode(function ($input, $output) use ($file) {
        $raw = require $file->getPathname();

        $output->writeln($raw);
    });

    foreach( token_get_all($file->getContents()) as $token ) {
        if ($token[0] == T_DOC_COMMENT) {
            $command->setDescription($token[1]);
            break;
        }
    }

    $application->add($command);
}

$application->run();

