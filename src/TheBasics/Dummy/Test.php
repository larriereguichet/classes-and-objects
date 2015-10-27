<?php

namespace TheBasics\Dummy;

/**
 * Class Test.
 */
class Test
{
    /**
     * @return static
     */
    static public function getNew()
    {
        return new static;
    }
}
