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

// for ($i = 1; $i <= 100; $i++) {  
//     if ($i % 3 == 0 && $i % 5 == 0) {  
//         echo "Hackademy\n";
//     } elseif ($i % 3 == 0) { 
//         echo "Php\n";
//     } elseif ($i % 5 == 0) {  
//         echo "Javascript\n";
//     } else {
//         echo $i . "\n"; 
//     }
// };


// ________________________________________________________________

// $array = [10, 20, 12, 30, 40];

// $filtro = array_filter($array, function($num) {
//     return $num <= 30;

// });

// print_r($filtro);

// $somma = array_sum($filtro);

// echo($somma);

// $mappa = array_map(function($numb){
//         return $numb + 2;
// },$filtro);

// print_r($mappa);


// ___________________________________________________________



// ESERCIZIO 3

// Rivedere la lezione
// Ripetere l’esercizio del controllo password visto a lezione (da soli o rivedendo il video)
// Implementare un metodo che faccia reinserire la password qualora anche una delle regole non fosse rispettate e che, invece, lo interrompa in caso di password accettata
// visualizzare in console quale regola non e’ stata rispettata




$password = readline("inserire password:");
var_dump(strlen($password));




function checkLenght($pwd){


// CONTROLLA LA LUNGHEZZA DELLA PASSWORD - FUNZIONE : strlen


if(strlen($pwd)>=10){               
    echo "Password Corretta";
    return true;
}else{
    echo "password non corretta";
    return false;
};



}

checkLenght($password);



// CICLA E CONTROLLA SE ALENO UNA LETTERA E' IN MAIUSCOLO - FUNZIONE :  ctype_upper


function checkUppercase($pwd){


    
    for ($i=0; $i < strlen($pwd) ; $i++) { 
    
        if(ctype_upper($pwd[$i])){
            echo "ok \n" ;
            break;
            return true;

           
        }else{
            echo "Ko \n";
            return false;
        }
    }

}

checkUppercase($password);




    // se trova almeno un numero


function checkNumber($pwd){


    for ($i=0; $i < strlen($pwd[$i]); $i++) { 
       if (is_numeric($pwd[$i])) {
           echo "numero presente \n";
           break;
           return true;
       }else{
           echo "numero non presente \n";
           return false;
       }
    };


}

checkNumber($password);



//  controlla se trova un carattere speciale

function checkSpecial($pwd){
    
    $caratteri = [ "!", "?" , "@", "#"];


    for ($i=0; $i <strlen($pwd) ; $i++) { 
        if(in_array($pwd[$i], $caratteri)){
            echo "Carattere speciale trovato \n";
            return true;
            
    
        }else{
            echo "carattere speciale non trovato \n";
            return false;
        }
        
    }


}

checkSpecial($password);











