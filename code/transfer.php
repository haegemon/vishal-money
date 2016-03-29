<?php

/**
 * Function transfer money between clients
 * @param Client $clientFrom Client who transfer money
 * @param Client $clientTo Client who get money
 * @param int $amount Amount of money
 * @throws Exception
 */
function transfer($clientFrom, $clientTo, $amount)
{
    if ($clientFrom->moneyAmount > $amount) {
        $clientTo->moneyAmount += $amount;
        $clientFrom->moneyAmount -= $amount;
    } else {
        throw new Exception('Not enough money');
    }
}

class Client {
    public $name;
    public $moneyAmount;

    public function  __construct($name, $amount)
    {
        $this->name = $name;
        $this->moneyAmount = $amount;
    }
}


$clientA = new Client('clientA', 100);
$clientB = new Client('clientB', 200);

transfer($clientA, $clientB, 50);

var_dump($clientA, $clientB);