<?php
interface Person{
 
    public function greet(): string;

}

class Programmer implements Person
{
    public $name;
    public function greet(): string
    {
        return "hello world from ".$this->name;
    }
}

class Students implements Person
{
    public $name;
    public function greet(): string
    {
        return "Hodwy! i'm ".$this->name;
    }
}

class Teacher implements Person
{
    public $name;
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