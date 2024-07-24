<?php

class Fund
{
    private $fund;
    public function __construct($initialFund=0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money)
    {
        //why only + operator can't work here??
        $this->fund += $money;
    }
    public function deductFund($money)
    {
        $this->fund -= $money;
    }
    public function getTotal() {
        echo "My Total Fund is : {$this->fund}<br>";
    }
}

$ourFund = new Fund(100);
////..We do not want to access fun outSide of the Class so We use Private
// $ourFund->fund=500;
$ourFund->getTotal();
$ourFund->addFund(20);
$ourFund->deductFund(13);
$ourFund->getTotal();
