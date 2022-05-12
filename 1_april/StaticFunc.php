<?php
class StaffClass{
   public static function getMywork()
    {
        echo 'I am developer';
    }
}

class OtherClass
{
   public function myMethod()
    {
        StaffClass::getMywork();
    }
}

$ob = new OtherClass();
$ob->myMethod();