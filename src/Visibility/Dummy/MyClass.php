<?php

namespace Visibility\Dummy;

/**
 * Class MyClass.
 */
class MyClass
{
    /**
     * @var string
     */
    public $public = 'Public';
    /**
     * @var string
     */
    protected $protected = 'Protected';
    /**
     * @var string
     */
    private $private = 'Private';

    /**
     * Declare a public constructor.
     */
    public function __construct()
    {
    }

    /**
     * Declare a public method.
     */
    public function myPublic()
    {
    }

    /**
     * Declare a protected method.
     */
    protected function myProtected()
    {
    }

    /**
     * Declare a private method.
     */
    private function myPrivate()
    {
    }

    /**
     * This is public.
     */
    function foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }

    /**
     * This is public.
     */
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
