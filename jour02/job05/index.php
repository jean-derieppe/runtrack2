<?php
// pour $i vaut 1 et $n inférieur ou égale à 100 . //
for ($i = 1 ; $i <= 1000 ; $i++){
    for ($x=2 ; $x<$i ; $x++ ){
        // si le modulo de i par rapport à n'importe quel chiffre au dessous = 0 on passe au prochain i . //
        if ( $i % $x === 0){
            break;
        }
//  si on est arrivé jusqu'à i-1 sans déclencher la conditions précédente, c'est un nombre premier . //
        else if( $x === $i-1){
            echo "</br>";
        }
    }
}