<?php
abstract class Shape
{
    private $numSide;
    public function __construct($numSide)
    {
        $this->numSide = $numSide;
      
        
    }

    public  function get_numSide()
    {
        return $this->numSide;
    }

    abstract public function getArea();
    abstract public function getPermeter();

    
}

class Rectangle extends Shape
{
    private $width;
    private $height;
    public $area;
    public $permeter;
    public $numSide;
    public function __construct($numSide,$height,$width)
    {
        $this->numSide = $numSide;
        $this->height = $height;
        $this->width =$width;
      
        
    }
    public function getArea()
    {
       return  $this->area = $this->height*$this->width;;;
    }

    public function getPermeter()
    {
       return  $this->permeter = ($this->height+$this->width)*2;
    }
}

class RtTriangle extends Shape
{
    private $base;
    private $height;
    private $c;
    public $area;
    public $permeter;
    public $numSide;
    public function __construct($numSide,$base,$height)
    {
        $this->numSide = $numSide;
        $this->base = $base;
        $this->height =$height;
       
    
      
        
    }

    public function getArea()
    {
       return $this->area = ($this->base*$this->height)/2;
    }

    public function getPermeter()
    {
       return $this->permeter= $this->c+$this->base+$this->height;
    }
}

class Define
{
    public $triangle;
    public $rectangle;
    public function defineTriangle($side,$b,$h)
    {
       return $this->triangle = new RtTriangle($side,$b,$h);
    }
    public function defineRectangle($side,$h,$w)
    {
        return $this->rectangle = new Rectangle($side,$h,$w);
    }
 
}

$def = new Define();
$Rtri= $def->defineTriangle(3,2,4);



echo "Permater of Triangle is ".$Rtri->getPermeter()."m"."<br>";
echo "Area of Triangle is ".$Rtri->getArea()."m<sup>2</sup>";

echo "<br><br>";

$REct= $def->defineRectangle(4,4,6);
echo "Permater of Rectangle is ".$REct->getPermeter()."m"."<br>";
echo "Area of Rectangle is ".$REct->getArea()."m<sup>2</sup>";
?>