<?php

namespace Visibility\Dummy;

/**
 * Class Test.
 */
class Test
{
    /**
     * @var string
     */
    private $foo;

    /**
     * @param string $foo
     */
    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo 'Accessed the private method.';
    }

    public function baz(Test $other)
    {
        // We can change the private property:
        $other->foo = 'hello';
        var_dump($other->foo);

        // We can also call the private method:
        $other->bar();
    }
}
