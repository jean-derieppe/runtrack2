<?php
// n'affiche pas les nombres de 21 à24 . //
for ($n = 0; $n <= 100; $n++){
    // si $n est inférieur ou égal à 20 "imprimer" $n en italique et à la ligne "<i>$n</i></br>" . //
    if ($n <= 20 ){
        echo "<i>$n</i></br>" ;
    }
    //si $n est supérieur ou égal à 25 ET (&&) $n est inférieur ou égal à 50 "imprimer" $n souligné à la ligne . //
    if ($n >= 25 && $n <= 50 ){
        echo "<u>$n</u></br>" ;
    }
    if($n == 42  ){
        echo "La Plateforme_</br>" ;
    }
    else if($n >= 20 && $n >= 25){
        echo $n . "</br>" ;
    }
}
?>