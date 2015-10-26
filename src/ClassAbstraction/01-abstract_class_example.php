<?php

use ClassAbstraction\Dummy\ConcreteClass1;
use ClassAbstraction\Dummy\ConcreteClass2;

$class1 = new ConcreteClass1();
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2();
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";
