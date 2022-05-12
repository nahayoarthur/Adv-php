<?php

class classA
{
    public $name="job";
    public function display()
    {
        echo "hi my name is ".$this->name."<br>";
    }
}

class classB extends classA
{
 
    public function display()
    {
        echo "hello my name is ".$this->name."<br>";
    }
}

$use = new classA();
echo $use->name;

$use2 = new classB("anny");
$use2->display("");
