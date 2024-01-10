<?php

//una costante è simile a una variabile, una volta definita il suo valore non può piu essere modificato

// const MELA = 'mela';

// const MELA = 'pera';

// echo MELA;

// define('PERA','pera');

$bool = true;

if($bool)
{
    define('PERA',2);
}
else{

    define('PERA','peracotta');

}


// per convenzione le costanti vengono definite con il nome in maiuscolo