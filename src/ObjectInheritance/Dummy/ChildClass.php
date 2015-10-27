<?php

namespace ObjectInheritance\Dummy;

/**
 * Class ChildClass.
 */
class ChildClass extends ParentClass
{
    public function printItem($string)
    {
        echo 'Child: ' . $string.PHP_EOL;
    }
}
