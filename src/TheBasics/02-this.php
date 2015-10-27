<?php

use TheBasics\Dummy\A;
use TheBasics\Dummy\B;

/**
 * Usage of the this keyword.
 */

$a = new A();
$a->foo();

// Note: the next line will issue a warning if E_STRICT is enabled.
A::foo();

$b = new B();
$b->bar();

// Note: the next line will issue a warning if E_STRICT is enabled.
B::bar();
