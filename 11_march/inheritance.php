<?php

class Animal
{
    private $family;
    private $food;

    public function __construct($a,$b)
    {
        $a=$this->family;
        $b=$this->food;
    }

    public function get_family()
    {
        return $this->family;
    }
    public function set_family($a)
    {
        $a = $this->family;
    }

    public function get_food()
    {
        return $this->food;
    }

    public function set_food($b)
    {
        $b=$this->food;
    }

}

class Cow extends Animal
{


    public function __construct($a,$b)
    {
        $a=$parent->family;
        $b=$super->food;
    }

    public function get_owner()
    {
        return $this->owner;
    }

    public function set_owner($o)
    {
        $o=$this->owner;
    }
}

class Lion extends Animal
{
    public function __construct($family,$food)
    {

    }
}

$animal1 = new Cow("domestic","goat");
$animal1->set_family("wild");
echo $animal1->get_family();
?>