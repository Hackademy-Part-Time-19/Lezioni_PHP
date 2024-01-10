<?php

//? for 

//for(parametro su cui viene valutata la condizione ; valutazione della condizione ; aggiornato il valore del parametro){}
// $i=0;

// for($i;$i<8;$i++){

//     echo $i;

// }

// echo " \n".$i;


//? Operatori di incremento e decremento


//incremento
$i=0;
$i++; // incrementa il valore, è uguale a scrivere $i = $i +1
++$i; //incrementa il valore prima di un'eventuale valutazione o accesso al valore della variabile

//decremento

$i--;
--$i;

//? Operatori di assegnazione e esecuzione operazione 

// $a = 0;
// $b = 5;


// $a += $b;

// echo $a ."\n";
// $a = 0;

// $a-=$b;
// echo $a ."\n";
// $a = 0;

// $a*=$b;
// echo $a ."\n";
// $a = 0;

// $a/=$b;
// echo $a ."\n";

// $stringa1 = "Ciao ";

// $stringa1 .= "ragazzi";

// echo $stringa1;

// $result ="";
// for($i=0; $i<20; $i++){
    
//     $result .= $i."-";

// }
// echo $result;


//? while
$a=0;
$counter=0;
// while($a<20){
//     $a++;
//     $counter++;

// }
// echo $counter;

//? do while  : il codice interno a un do while viene eseguito almeno una volta anche se la condizione non è verificata in partenza

// do{

//     $counter++;
//     echo $counter;
//     $a++;

// }while($a<20);

//? foreach è un metodo esclusivo degli array e cicla tutte le coppie chiave => valore presenti nell'array salvandole in una variabile

$a = 'elemento 1';
$b = 'elemento 2';

$c[] = 1;

// var_dump($c);

// $array =['stringa', "name"=>"Emanuele", "key"=> 26, 'cannella'];

// $array[] = 5; 

// var_dump($array);

// foreach($array as $elemento){
//     echo "$elemento \n";
// }

$arrayMultimensionale = [[1,2,3],['mela','pera','banana'],[8,8,8,7]];

// foreach($arrayMultimensionale as $elemento){
//     echo "Giro esterno \n";
//     foreach($elemento as $valore){
//         echo $valore;
//     }

// }

$array_semplice= ['mela', 'pera' => 65,'banana',9=>'pallone',3=> 64];
$array_semplice[]=1.3;


//? foreach chiave => valore


// foreach($array_semplice as $chiave => $valore){

//     echo "In posizione $chiave ho: ". $valore ."\n";

// }


//? accesso ad array con for

// for($i=0;$i<5;$i++){

//     echo $array_semplice[$i] ." \n";
// }


//? for con le stringhe

// $stringa = "Il campo da calcio è verdeaaaaaaaaaaa";

// var_dump(strlen($stringa));

// $counter = 0;
// for($i=0;$i<strlen($stringa);$i++){

//     if($stringa[$i]=='a'){
//         $counter++;
//     }

// }
// echo $counter;


//? 

$array_disordinato = [1=> 'elemento1', 'pippo'=> 'topolino',4=> 'gianluca',54,1];

$array_chiavi_ordinate =[];
$counter = 0;

foreach($array_disordinato as $valore){
        
        $array_chiavi_ordinate[$counter]= $valore;
        $counter++;
}

print_r($array_chiavi_ordinate);










