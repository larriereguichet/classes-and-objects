<?php

namespace Constructors\Dummy;

/**
 * Class Plant.
 */
class Plant
{
    /**
     * The name of the plant.
     *
     * @var string
     */
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
