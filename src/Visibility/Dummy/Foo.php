<?php

namespace Visibility\Dummy;

/**
 * Class Foo.
 */
class Foo
{
    public function testPublic()
    {
        echo "Foo::testPublic\n";
    }

    private function testPrivate()
    {
        echo "Foo::testPrivate\n";
    }
}
