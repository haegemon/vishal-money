<?php

/**
 * Function transfer money between clients
 * @param array $clientFrom Client who transfer money
 * @param array $clientTo Client who get money
 * @param int $amount Amount of money
 * @throws Exception
 */
function transfer($clientFrom, &$clientTo, $amount)
{
    if ($clientFrom['moneyAmount'] > $amount) {
        $clientTo['moneyAmount'] += $amount;
        $clientFrom['moneyAmount'] -= $amount;
    } else {
        throw new Exception('Not enough money');
    }
}


$clientA = [
    'name' => 'clientA',
    'moneyAmount' => 100,
];

$clientB = [
    'name' => 'clientB',
    'moneyAmount' => 200,
];

transfer($clientA, $clientB, 50);