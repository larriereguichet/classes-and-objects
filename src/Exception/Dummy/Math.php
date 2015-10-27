<?php

namespace Exception\Dummy;

use Exception;

/**
 * Class Math.
 */
class Math
{
    /**
     * @param float $x
     *
     * @throws \Exception
     *
     * @return float
     */
    public static function inverse($x)
    {
        if (!$x) {
            throw new Exception('Division by zero.');
        }

        return 1 / $x;
    }
}
