<?php


//? PHP è un linguaggio interpretato: va a leggere e eseguire riga per riga le istruzioni del mio programma

//? Variabili

$a = 0;

//? Regole definizione variabili


//Giuste
$variabile_uno;

$_inizio;

$numero1;

//Sbagliati

/*  $1variabile;

$prova!speciale;

$otto+2;

$a-b; */

// <- commento a linea singola

// stampare in console

// echo 1;
// echo 1.5;

//?tipologie di dati

//? scalari o semplici

// stringa

$stringa = 'sono una stringa';

//interi

$intero = 5;

// booleano

$booleano = true;

$booleano_false = false;

// float

$float = 1.5;

//? composti o user defined

// array

$array = array(1,3,5); //! non si usa piu 

$array = [1,3,5];

// oggetti

// speciali

$null = NULL;

//?var_dump e print_r sono funzioni che danno informazioni su una variabile passata come argomento



//? tipizzazione debole

$a = 5;

// echo $a ."\n";

$a= "macchina";

// echo $a;

//? variabili sono case sensitive 

$b = 4;

$B= 5;

echo $B;