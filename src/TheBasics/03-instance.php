<?php

use TheBasics\Dummy\SimpleClass;

$instance = new SimpleClass();

var_dump($instance);

// This can also be done with a variable:
$className = 'TheBasics\Dummy\SimpleClass';
$instance  = new $className(); // new SimpleClass()

var_dump($instance);
