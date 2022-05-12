<?php
class employee
{
   
    public $name;
    public $position;
    function __construct($name,$position)
    {
       $this-> name=$name;
       $this -> profile =$position;

    }

    function __destruct()
    {
        echo "destroying". $this->name . $this-> position. "<br>";
    }

    function show_details(){
        echo $this -> name.":";
        echo "your position is".$this->profile."<br>";



    }
}
$employee_obj= new employee("rakesh","developer");
$employee_obj-> show_details();

$employee2_obj= new employee("dancila","manager");
$employee2_obj-> show_details();

echo " Dorah ";
?>