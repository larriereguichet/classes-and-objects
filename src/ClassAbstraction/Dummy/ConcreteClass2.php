<?php

namespace ClassAbstraction\Dummy;

/**
 * Class ConcreteClass2.
 *
 * @see http://php.net/manual/en/language.oop5.abstract.php
 */
class ConcreteClass2 extends AbstractClass
{
    public function getValue()
    {
        return 'ConcreteClass2';
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass2";
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function prefixName($name)
    {
        if ($name == 'Pacman') {
            $prefix = 'Mr';
        } elseif ($name == 'Pacwoman') {
            $prefix = 'Mrs';
        } else {
            $prefix = '';
        }

        return "{$prefix}{$name}";
    }
}
