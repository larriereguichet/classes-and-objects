<?php

use TheBasics\Dummy\Foo;

/**
 * A class can have a property and a method with the same name.
 */

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
