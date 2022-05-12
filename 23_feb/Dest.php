<?php
class SomeClass
{
    function __construct()
    {
        echo "in constructor,";
        $this-> name = "class object!";
    }

    function __destruct()
    {
        echo "destroying". $this->name . "\n";
    }
}
$obj = new SomeClass();
echo " DORAH "
?>