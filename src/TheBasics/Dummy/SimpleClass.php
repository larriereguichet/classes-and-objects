<?php

namespace TheBasics\Dummy;

/**
 * Class SimpleClass.
 */
class SimpleClass
{
    /**
     * Property declaration.
     *
     * @var string
     */
    public $var = "a default value\n";

    /**
     * Method declaration.
     *
     * @return string
     */
    function getVar()
    {
        return $this->var;
    }

    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}
