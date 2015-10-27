<?php

namespace Constructors\Dummy;

/**
 * Class MyDestructableClass.
 */
class MyDestructableClass
{
    public function __construct()
    {
        print "In constructor\n";
        $this->name = 'MyDestructableClass';
    }

    public function __destruct()
    {
        print 'Destroying ' . $this->name . "\n";
    }
}
