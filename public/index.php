<?php

require __DIR__ . '/../vendor/autoload.php';

use Xuplau\HSAPI\HSAPI;
use Xuplau\HSAPI\Filters\Card as Filters;

$hsapi   = new HSAPI;
$filters = new Filters;

// Get All Cards
$tmp = $hsapi->cards()->get($filters);
var_dump($tmp);


// Get All Cards with 10 of attack
$filters->attack = 10;
$tmp = $hsapi->cards()->get($filters);
var_dump($tmp);


// Get a card
$filters->name = 'Magmaw';
$tmp = $hsapi->cards()->get($filters);
echo $hsapi->cards()->get($filters)->name;
var_dump($tmp);