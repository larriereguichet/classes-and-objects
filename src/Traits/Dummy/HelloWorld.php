<?php

namespace Traits\Dummy;

/**
 * Class HelloWorld.
 */
class HelloWorld
{
    use HelloTrait, WorldTrait;

    public function sayExclamationMark()
    {
        echo '!';
    }
}
