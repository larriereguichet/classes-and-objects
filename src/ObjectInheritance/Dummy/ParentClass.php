<?php

namespace ObjectInheritance\Dummy;

/**
 * Class ParentClass.
 */
class ParentClass
{
    /**
     * @param string $string
     */
    public function printItem($string)
    {
        echo 'Parent: ' . $string . PHP_EOL;
    }

    public function printPHP()
    {
        echo 'PHP is great.' . PHP_EOL;
    }
}
