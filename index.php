<?php

// ESERCIZIO 1

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


$array = [3, 5, 9, 1, 2, 10, 11, 20,3 ] ;

$filtro = array_filter($array, function($num){
    return $num % 2 == 0;
            
});

    print_r($filtro);

$somma = array_sum($filtro);  
$media= $somma / count($filtro);

print_r($media);

// ______________________________________________________________________________









// $numeri = [1, -2, 3, -4, 5, 0, -6];

// // Funzione per filtrare solo i numeri positivi
// $numeriFiltrati = array_filter($numeri, function($numero) {
//     return $numero > 0; // Condizione: selezioniamo solo i numeri maggiori di 0
// });

// // Visualizza l'array filtrato
// print_r($numeriFiltrati);





?>




