<?php

use ObjectInheritance\Dummy\ChildClass;
use ObjectInheritance\Dummy\ParentClass;

$parent = new ParentClass();
$child  = new ChildClass();
$parent->printItem('baz'); // Output: 'Parent: baz'
$parent->printPHP();       // Output: 'PHP is great'
$child->printItem('baz'); // Output: 'Child: baz'
$child->printPHP();       // Output: 'PHP is great'
