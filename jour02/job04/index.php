<?php 
// pour $n compris entre 1 et 100, incrémenter $n de 1 à chaque boucle . //
for ($n = 1; $n <= 100; $n++){
    // si $n modulo 3 ou 5 print Fizzbuzz . //
    if ($n % 3 == 0 && $n % 5 == 0){
        echo "Fizzbuzz" . "<br>" ;
    }
    // sinon si $n modulo 3 print Fizz . //
    elseif ($n % 3 == 0){
        echo "Fizz" . "<br>" ;
    }
    // sinon si $n modulo 5 print Buzz . //
    elseif ($n % 5 == 0){
        echo "Buzz" . "<br>" ;
    }
    // sinon print $n à la ligne . //
    else{
        echo $n . "<br>" ;
    }
}
?>