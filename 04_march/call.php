<?php

class Sample
{
    function user_define()
    {
        echo "this is user defined function"."<br>";
    }

    function __call($fun, $arg)
    {
        echo "function does not exits:".$fun." "."<br>";
        echo "parameter list of method that does  not exits"."<br>";
        print_r($arg);
    }
}
$obj = new Sample();
$obj->run("teacher");
$obj->see("teacher","student","cleaners");
$obj->eat("ashok","orange");
$obj->user_define();
?>