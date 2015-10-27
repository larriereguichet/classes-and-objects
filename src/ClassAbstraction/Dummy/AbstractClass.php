<?php

namespace ClassAbstraction\Dummy;

/**
 * Class AbstractClass.
 *
 * @see http://php.net/manual/en/language.oop5.abstract.php
 */
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();

    abstract protected function prefixValue($prefix);

    // Our abstract method only needs to define the required arguments
    abstract protected function prefixName($name);

    // Common method
    public function printOut()
    {
        print $this->getValue() . "\n";
    }
}
