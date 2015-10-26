<?php

namespace Visibility\Dummy;

/**
 * Class MyClass.
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    // Declare a public constructor
    public function __construct() { }

    // Declare a public method
    public function MyPublic() { }

    // Declare a protected method
    protected function MyProtected() { }

    // Declare a private method
    private function MyPrivate() { }

    // this is public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }

    // this is public
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
