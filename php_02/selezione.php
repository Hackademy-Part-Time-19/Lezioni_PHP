<?php

//? if

/*
$a = []; //false
$b= [1,32]; // true

$stringa = ""; //false
$stringa1 = "Ciao"; //true

$c = 5; // true
$d = 0; //false

*/

// if($a){

//     echo "Ciao";

// }

// if esegue il codice all'interno delle parentesi graffe solo quando la condizione è vera

// echo "Fine programma \n";


//? if else

$bool = false;

// if($bool){

//     echo "bool è true";

// }
// else{

//     echo "bool è false";

// }

//? if elseif else

$a = 5;
$b= 2;
$c = '5';


// if( $a>$b && $a===$c){

//     echo "a è maggiore di b";

// }
// elseif($a==$b){
//     echo "a è uguale a b";
// }
// else{
//     echo "a è minore di b";
// }

//? Switch

$i=6;
switch($i){
    case 0:
    case 1:
    case 5:
        echo "i è minore di 1";
        break;

    default:
        echo "Caso default";
        break;
        
}


