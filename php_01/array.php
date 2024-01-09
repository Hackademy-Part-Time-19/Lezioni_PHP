<?php

//? definizione array

$array_old = array(1,2,3);

$array_new = [1,2,3,4,5];

// echo $array_new[0];

//? gli array in php sono zero based -> il primo elemento di un array ha indice 0 e poi vanno in maniera incrementale

$array_new[6] = 8;

$array_new[8] = 10;

// print_r($array_new);

//? array multimensionale

$array = [1,
[2,
6],
"Pera",
true,
[1,
3,
"Carla",
[3,
["piero"]
]
]
];

// echo $array[3][2] ;


//? array associativi

$variabile = "calcio";

$array_associativo = [1, $variabile => $array,6];

// print_r($array_associativo);

// echo $array_associativo["nome"];


$array_esercizio = ["Il",'sole'=> ['splende',"in", [5 =>'cielo', ' ']] ,"sole"];

echo $array_esercizio[0] ." ". $array_esercizio[1] ." ". $array_esercizio['sole'][0] ." ".  $array_esercizio['sole'][43] ." ". $array_esercizio['sole'][2][5];


$array_1 = [1, 5 => 3,3, 2 => 'seconda pos', 10];

$array_2 = [5, 'prova' => 9, 'ciao'];

// print_r($array_1);
// print_r($array_2);



