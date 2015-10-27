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
    public function getVar()
    {
        echo "Extending class\n";

        return parent::getVar();
    }
}
