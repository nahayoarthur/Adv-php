<?php
abstract class Person{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    abstract public function greet(): string;

}

class Programmer extends Person
{
    public function greet(): string
    {
        return "hello world from ".$this->name;
    }
}

class Students extends Person
{
    public function greet(): string
    {
        return "Hodwy! i'm ".$this->name;
    }
}

class Teacher extends Person
{
    public function greet(): string
    {
        return "Goodmorning dear students";
    }
}

$programemr = new Programmer("John");
echo $programemr->greet();
echo "<br>";

$student =new Students("Doe");
echo $student->greet();
echo "<br>";

$teacher = new Teacher("MAry");
echo $teacher->greet();
echo "<br>";