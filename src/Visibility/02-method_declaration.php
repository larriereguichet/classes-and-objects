<?php

use Visibility\Dummy\Foo;
use Visibility\Dummy\MyClass;
use Visibility\Dummy\MyClass2;

$myclass = new MyClass();
$myclass->myPublic(); // Works
$myclass->myProtected(); // Fatal Error
$myclass->myPrivate(); // Fatal Error
$myclass->foo(); // Public, Protected and Private work

$myclass2 = new MyClass2();
$myclass2->myPublic(); // Works
$myclass2->foo2(); // Public and Protected work, not Private


$myFoo = new Foo();
$myFoo->test(); // Bar::testPrivate
// Foo::testPublic

