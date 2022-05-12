<?php
class Chain{
    public $name="job";
    function method1()
    {
        echo "hello from method 1 ";
        $this->name= "chain method";
        return $this;
    }
    function method2()
    {
        echo "hello from method 2 ($this->name)";
    }
}
$use = new Chain();
echo $use->method2();
