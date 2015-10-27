<?php

namespace ObjectInterfaces\Dummy;

/**
 * Interface TemplateInterface.
 */
interface TemplateInterface
{
    public function setVariable($name, $var);
    public function getHtml($template);
}
/**
 * An example of duck typing in PHP.
 */
interface CanFly
{
    public function fly();
}

interface CanSwim
{
    public function swim();
}

class Bird
{
    public function info()
    {
        echo "I am a {$this->name}\n";
        echo "I am an bird\n";
    }
}

/**
 * some implementations of birds.
 */
class Dove extends Bird implements CanFly
{
    public $name = 'Dove';
    public function fly()
    {
        echo "I fly\n";
    }
}

class Penguin extends Bird implements CanSwim
{
    public $name = 'Penguin';
    public function swim()
    {
        echo "I swim\n";
    }
}

class Duck extends Bird implements CanFly, CanSwim
{
    public $name = 'Duck';
    public function fly()
    {
        echo "I fly\n";
    }
    public function swim()
    {
        echo "I swim\n";
    }
}
