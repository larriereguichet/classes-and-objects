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
    public static function getNew()
    {
        return new static();
    }
}
