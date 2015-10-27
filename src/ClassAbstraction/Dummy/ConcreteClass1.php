<?php

namespace ClassAbstraction\Dummy;

/**
 * Class ConcreteClass1.
 *
 * @see http://php.net/manual/en/language.oop5.abstract.php
 */
class ConcreteClass1 extends AbstractClass
{
    protected function getValue()
    {
        return 'ConcreteClass1';
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass1";
    }

    // Our child class may define optional arguments not in the parent's signature
    public function prefixName($name, $separator = '.')
    {
        if ($name == 'Pacman') {
            $prefix = 'Mr';
        } elseif ($name == 'Pacwoman') {
            $prefix = 'Mrs';
        } else {
            $prefix = '';
        }

        return "{$prefix}{$separator} {$name}";
    }
}
