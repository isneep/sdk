<?php
include "../gateway.php";

use Paynl\SDK\Model\Transaction;
use Paynl\SDK\Model\Address;

$address = Address::fromArray([]);

$transaction = Transaction::fromArray([
    'description' => 'Test transactie',
    'price' => ['amount' => 1000],
    'serviceId' => 'SL-4241-3001',
    'exchange' => ['url' => 'https://my-exchange.url'],
    'returnUrl' => 'https://andypieters.nl',
    'products' => [
        ['id' => '1', 'description' => 'Koffie', 'price' => 100, 'quantity' => 5],
        ['id' => '2', 'description' => 'Thee', 'price' => 50, 'quantity' => 5],
        ['id' => '3', 'description' => 'Suiker', 'price' => ['amount' => 10, 'currency' => 'USD'], 'quantity' => 25]
    ],
    'address' => $address,
    'billingAddress' => $address
]);
$transaction->address->streetNumberExtension = 'x';


$transaction->invoiceDate = new DateTime('now');
$transaction->deliveryDate = new DateTime('+3 days');

$transaction = $gateway->transactions()->post($transaction);
// todo Still no finish url (issuerUrl)
echo $transaction->id;

echo PHP_EOL;

echo $transaction;