<?php

// ESERCIZIO 1

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


// $array = [3, 5, 9, 1, 2, 10, 11, 20,3 ] ;

// $filtro = array_filter($array, function($num){
//     return $num % 2 == 0;
            
// });

//     print_r($filtro);

// $somma = array_sum($filtro);  
// $media= $somma / count($filtro);

// print_r($media);

// ______________________________________________________________________________

// esercizio 2

                            
// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// se multiplo di 5 stampare “JAVASCRIPT”;
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".





//     for ($i=1; $i < 100 ; $i++){ 
//     if($i % 3 == 0 && $i % 5 == 0){
//         echo "hackademy\n";
//     } elseif( $i % 5 == 0){
//         echo "php\n";
// }
// }

for ($i = 1; $i <= 100; $i++) {  
    if ($i % 3 == 0 && $i % 5 == 0) {  
        echo "Hackademy\n";
    } elseif ($i % 3 == 0) { 
        echo "Php\n";
    } elseif ($i % 5 == 0) {  
        echo "Javascript\n";
    } else {
        echo $i . "\n"; 
    }
};