<?php
class House{
public $name;
public $color;
    public function setData($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }
    public function echoData(){
        echo "the color of the {$this -> name} is {$this -> color}";
    }
}
$blackHouse = new House();
$whiteHouse = new House();

$blackHouse -> setData("Dorah's house","black");
$whiteHouse -> setData("Nahayo's house","white");

$blackHouse -> echoData();
echo '<br>';
$whiteHouse -> echoData();