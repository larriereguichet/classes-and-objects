<?php

namespace TheBasics\Dummy;

/**
 * Class ExtendClass.
 */
class ExtendClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}
