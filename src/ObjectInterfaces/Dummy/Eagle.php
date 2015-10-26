<?php

namespace ObjectInterfaces\Dummy;

/**
 * Class Eagle.
 */
class Eagle implements CanFlyInterface
{
    public function fly() {
        echo "I am an eagle and I can fly\n";
    }
}
