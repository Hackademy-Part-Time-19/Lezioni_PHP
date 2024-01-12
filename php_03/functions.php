<?php

//? una funzione è un blocco di codice che può essere riutilizzato più volte 

//definizione

function saluta(){

    echo "Ciao";

}


//? le funzioni in php non sono case sensitive, non posso ricidichiare la stessa funzione
// function saLUtA(){

// }

//? è buona pratica associare a una funzione un solo compito e definirla con un nome che sia esplicativo

// inviaMail(){

// }

// $array_persone = ['name'=> 'Gennaro', 'surname' =>'Bianchi','gender'=>'M'];

// function checkGender(){

//     if($array_persone['gender']=='M'){
//         echo "1";
//     }
//     elseif($array_persone['gender']=='F'){
//         echo "2";
//     }
//     else{
//         echo "3";
//     }

// }

// checkGender();

//? scope variabili nelle funzioni

// $a = 'Stringa';

// function spazioTemp(){
//     $a = 'Marco';
    
//     var_dump($a);
// }

// function spazio2(){
//     $a = 'Polo';
//     var_dump($a);
// }

// spazioTemp();
// spazio2();

//? funzioni parametriche


// $p = 10;

//? passaggio di parametro per valore

function somma($a,$b){

    echo $a +$b ."\n";
    
    return $a +$b;


}

//? passaggio di parametro per riferimento

// function sottrazione(&$a,$b){

//     echo $a-$b."\n";
//     $a = 5;

// }


// somma($p,7);
// var_dump($p);
// sottrazione($p,10);
// var_dump($p);

//? funzioni con valore di ritorno

// somma(4,76);

// var_dump(somma(4,76));

// function funzioneConValoreDiRitorno(){

//     return 55;

// }

// var_dump(funzioneConValoreDiRitorno());

// $c = somma(5,12);

// var_dump($c);


//? type hinting

function moltiplicazione(int $num1,int $num2){

    return $num1*$num2;

}


//? return type hinting

function divisione(int $num1,int $num2) : float {

    return $num1/$num2;

}


$stringa = 'MDSOnfaonmsOSFomfsa';

function applicaFunzione(callable $callback, $parametro){

    // var_dump($callback);
    $callback($parametro);
    // strtolower($parametro);
}

// applicaFunzione(function ($a){
//     echo $a;
// },$stringa);

//? parametri con valore di default

function parametri($a ="Ciao",$b = "\n"){

    echo $a .$b;
}
parametri();
parametri();
parametri();