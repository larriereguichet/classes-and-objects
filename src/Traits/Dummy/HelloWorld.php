<?php

namespace Traits\Dummy;

/**
 * Class HelloWorld.
 */
class HelloWorld
{
    use Hello, World;
    public function sayExclamationMark() {
        echo '!';
    }
}
