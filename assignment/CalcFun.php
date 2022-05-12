<?php


class ButtClass
{
    public $height;
    public $width;
    public $color;
    public $value;

    public function __construct($a,$b,$c,$d)
    {
        $this->height=$a;
        $this->width=$b;
        $this->color=$c;
        $this->value=$d;
    }

}

$one = new ButtClass(11,5,"green",1);
$two = new ButtClass(11,5,"gray",2);
$three = new ButtClass(11,5,"gray",3);
$four = new ButtClass(11,5,"gray",4);
$five = new ButtClass(11,5,"gray",5);
$six = new ButtClass(11,5,"gray",6);
$seven = new ButtClass(11,5,"gray",7);
$eight = new ButtClass(11,5,"gray",8);
$nine = new ButtClass(11,5,"gray",9);
$zero = new ButtClass(11,5,"gray",0);

class Ops
{
    public $First_op;
    public $Second_op;
    public function Add($a,$b)
    {
        $this->First_op=$a;
        $this->Second_op=$b;

        echo $a+$b."<br>";
    }

    public function Minus($a,$b)
    {
        
        $this->First_op=$a;
        $this->Second_op=$b;

        echo $a-$b."<br>";

    }

    public function Mult($a,$b)
    {
        $this->First_op=$a;
        $this->Second_op=$b;
        
        echo $a*$b."<br>";
    }

    public function Div($a,$b)
    {
        $this->First_op=$a;
        $this->Second_op=$b;

        echo $a/$b."<br>";
    }
}
$use= new Ops();
/* $use->Add(1,2);
$use->Minus(5,3);
$use->Mult(4,3);
$use->Div(45,5); */


