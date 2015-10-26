<?php

namespace ObjectInterfaces\Dummy;

/**
 * Class Duck.
 */
class Duck implements CanFlyInterface, CanSwimInterface
{
    public function fly()
    {
        echo "I am a duck and I can fly...\n";
    }

    public function swim()
    {
        echo "...and I am duck therefore I swim\n";
    }
}
