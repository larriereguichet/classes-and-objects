<?php

namespace Visibility\Dummy;

/**
 * Class MyClass2.
 */
class MyClass2 extends MyClass
{
    /**
     * We can redeclare the public and protected method, but not private.
     *
     * @var string
     */
    protected $protected = 'Protected2';

    public function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }

    /**
     * This is public.
     */
    public function foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate(); // Fatal Error
    }
}
