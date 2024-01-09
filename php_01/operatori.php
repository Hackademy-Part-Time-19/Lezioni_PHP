<?php

//? operatori matematici

$a = 43;
$b= 10;

//addizione

// echo $a+ $b ."\n";

//sottrazione

// echo $a - $b."\n";

//moltiplicazione

// echo $a * $b."\n";

//divisione

// echo $a/$b."\n";

//potenza

// echo $a**$b."\n";

//modulo

// echo 9%3 ."\n";

//? operatori logici

// NOT, AND , OR
//  ! ,  && , ||
  
$bool_true = true;

$bool_false = false;

// var_dump($bool_false && $bool_true);

//? AND restituisce vero se entrambi gli operandi sono veri

// true && true => true
// true && false => false
// false && true => false
// false && false => false

//? OR restituisce vero se almeno uno dei due operandi è vero

// true || true => true
// true || false => true
// false || true => true
// false || false => false

//? NOT

// !true => false
// !false => true

//? operatori di confronto 

$a = 5;
$b = '5';
$c = 6;

//maggiore  >

//minore  <

// uguale ==

// diverso !=

// identicamente uguale  ===

//identicamente diverso  !==

// maggiore o uguale   >=

//minore o uguale   <=

// spaceship  <=>



//? type coercion 

// var_dump ( (int)"pietro" + 1);

$a = 5.6;

// var_dump( (string)$a);

//? 

// $truthy = [2,54];
// $falsy = [];

$truthy = "stringa";
$falsy = "";


var_dump((bool)$truthy);
var_dump((bool)$falsy);