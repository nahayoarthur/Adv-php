<?php

class User 
{
    private $fName="";
    private $lName="";
    private $bankAcount=null;

    public function setFname($fName)
    {
        $this->fName = $fName;
    }
    public function getFname()
    {
        return $this->fName;
    }


    public function setLname($lName)
    {
        $this->lName = $lName;
    }
    public function getLname()
    {
        return $this->lName ;
    }
    

    public function setBank($bankAcount)
    {
        $this->bankAcount = $bankAcount;
    }

    public function getBankName()
    {
        return $this->bankAcount->name;
    }

    public function getBalance()
    {
        return $this->bankAcount->getBalance();
    }
    public function setBalance($balance)
    {
        $this->bankAcount->setBalance($balance);
    }

    public function deductAmount($amount)
    {
        $this->bankAcount->deductAmount($amount);
    }

}



class Bank
{
    public $name="";
    public $accountNumber="";
    private $balance=0;

    public function __construct($name,$accountNumber,$balance)
    {
        $this->name = $name;
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deductAmount($amount)
    {
        if($amount<=$this->balance)
        {
            $this->balance -= $amount;

        }
        else
        {
            echo "<h3>No Sufficient Funds</h3>";
        }
    }

    public function setBalance($amount)
    {
        if($amount>0)
        {
            $this->balance +=$amount;
        }
        else
        {
            echo "<h3>Invalid input($amount)</h3>";
        }
        
    }
    public function getBalance()
    {
        return $this->balance;
    }
}


$acount1 = new Bank("savings","5522",0);
$user1 = new User();


$user1->setBank($acount1);

$user1->setFname("Nalwanyiri");
$user1->setLname("Dorah");

$user1->deductAmount(20);

echo "<b>Name:</b> ".$user1->getFname()." ".$user1->getLname()."</br>";
echo "<b>Account Number:</b> ".$acount1->accountNumber."</br>";
echo "<b>wallet:</b> ".$user1->getBalance()." rwf";


?>