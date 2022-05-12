<?php

use Myclass as GlobalMyclass;

class Myclass
{
    public static $name = 'Tony';
    public function __construct()
    {
        echo 'We are '. self::$name;        
    }
}
echo Myclass::$name . '<br>';
Myclass::$name = 'Tony Developer';
new Myclass();