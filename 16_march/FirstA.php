<?php
class Person
{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce()
    {
        echo "my name is {$this -> name}, my age is {$this->age}<br>";
    }
}

class Tom extends Person
{
    public $school;
    public function __construct($name, $age, $school)
    {
        parent::__construct($name,$age);
        $this->school = $school;
    }

    public function introduce()
    {
        echo "my name is {$this -> name}, my age is {$this -> age}, my school is {$this-> school}";
    }
 
}

$tom = new Tom('Tom',29,'Karugira');
$tom->introduce();