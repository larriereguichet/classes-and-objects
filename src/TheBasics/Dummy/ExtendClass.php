<?php

namespace TheBasics\Dummy;

/**
 * Class ExtendClass.
 */
class ExtendClass extends SimpleClass
{
    /**
     * Redefine the parent method.
     */
    function getVar()
    {
        echo "Extending class\n";

        return parent::getVar();
    }
}
