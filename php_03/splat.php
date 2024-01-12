<?php

// $input = readline('inserisci una password:');
// $passwordCorretta = function ($input){
//     if($input=='corretto'){
//         return true;
//     }
//     return false;
// };
// var_dump($passwordCorretta);


//? splat operator o operatore di spacchettamento  ...
//? opera su array o elementi iterabili

$array = [1,2,3,4];
$array1 = [54,34,765,2];


$arrayFinale =[...$array,...$array1];


var_dump($arrayFinale);

function sommaNumeri(...$numeri){
    $totale=0;
    foreach($numeri as $numero){
        $totale += $numero;
    }
    return $totale;
}

// echo sommaNumeri( 1,2,3,4,5,6,7);


// function applicaFunzione($callback, ...$elementi){
//     $callback(...$elementi);
// }

// function funzCallback(...$giancarlo) {
//     foreach($giancarlo as $giancarlino){
//         echo $giancarlino ."\n";
//     }
   
// }

// applicaFunzione('funzCallback',...$array);