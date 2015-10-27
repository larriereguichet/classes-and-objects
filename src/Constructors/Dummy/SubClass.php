<?php

namespace Constructors\Dummy;

/**
 * Class SubClass.
 */
class SubClass extends BaseClass
{
    public function __construct()
    {
        parent::__construct();

        print "In SubClass constructor\n";
    }
}
