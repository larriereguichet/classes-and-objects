<?php

use Constructors\Dummy\BaseClass;
use Constructors\Dummy\OtherSubClass;
use Constructors\Dummy\Plant;
use Constructors\Dummy\SubClass;

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();

// With arguments
$plant = new Plant('ficus');

echo $plant->name;
