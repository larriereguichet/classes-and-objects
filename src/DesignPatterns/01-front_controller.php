<?php

use DesignPatterns\Dummy\FrontController;

$frontController = new FrontController();
echo $frontController->handle('home');
echo $frontController->handle('admin');
