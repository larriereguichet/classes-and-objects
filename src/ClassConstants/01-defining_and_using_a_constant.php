<?php

use ClassConstants\Dummy\MyClass;

echo MyClass::CONSTANT . "\n";

$classname = 'ClassConstants\Dummy\MyClass';
echo $classname::CONSTANT . "\n"; // As of PHP 5.3.0

$class = new MyClass();
echo $class->getConstant();

echo $class::CONSTANT . "\n"; // As of PHP 5.3.0

