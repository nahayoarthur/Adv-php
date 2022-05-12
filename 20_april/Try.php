<?php
trait Price
{
    public function changePrice($price){
    return $price *5;
    }
}
class Taxes
{
    public $cost=100;
    public function calculateTaxes($price,$change)
    {
        return $price+$change;
    }
}

class Bread
{
    use Price;
}

$bread1 = new Bread();
echo $bread1->changePrice(10,2);