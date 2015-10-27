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
    public function getVar()
    {
        return $this->var;
    }

    public function foo()
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
