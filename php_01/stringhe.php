<?php

$stringa1 = 'Sono la prima stringa';

$stringa2 = "Sono la stringa numero due";

$variabile = 'Emanuele';

$frase_presentazione = "Ciao sono $variabile" ;

//? Apice singolo riconosce i caratteri all'interno in maniera letterale

//? apici doppi riconoscono nella stringa elementi speciali come variabili, caratteri a capo o altri



// Escape character

$frase = 'L\'albero non ha le foglie';

$frase2 = "Ciao sono \"Emanuele\"";

$frase3 = "Buongiorno, \$frase_presentazione";

// Concatenazione

//operatore di concatenzione è il .

// echo $frase .  ' '.$frase2 . $frase3; 


echo ($frase) , ($frase2);