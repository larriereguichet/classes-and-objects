<?php

use TheBasics\Dummy\Test;
use TheBasics\Dummy\Child;

/**
 * PHP 5.3.0 introduced a couple of new ways to create instances of an object.
 */

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
