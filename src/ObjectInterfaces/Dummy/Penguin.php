<?php

namespace ObjectInterfaces\Dummy;

/**
 * Class Penguin.
 */
class Penguin implements CanSwimInterface
{
    public function swim() {
        echo "I am a penguin and I can swim\n";
    }
}
