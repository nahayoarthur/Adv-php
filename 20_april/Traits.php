<?php
trait Price
{
    public function changePrice($price, $change){
    return $price + $change;
    }
}

trait Taxes
{
    public $cost=100;
    public function calculateTaxes($price)
    {
        return $price*0.18;
    }
}

class Bread
{
    use Price,Taxes;
}

class Drink
{
    use Price,Taxes;
}
$Bread1 = new Bread();
echo $Bread1 -> changePrice(45000, +3000);
echo "<br>";
echo $Bread1->cost;
echo "<br>";
echo $Bread1 -> calculateTaxes(45000);
echo "<br>";
$Drink1 =new Drink();
echo $Drink1-> changePrice(4200, -2100);
echo "<br>";
echo $Drink1 -> calculateTaxes(4200);