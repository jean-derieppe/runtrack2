<?php
// déclaration d'une variable ($n) et de sa valeur (0); pour $n inférieur ou égal à 1337; incrémenter $n de 1 pour chaque tour jusqu'a 1337. //

for ($n = 0; $n <= 1337; $n++){
    // si $n vaut 42, imprimer 42 en gras et souligné grace aux balises "<b><u>$n</u></br>" . //
    if( $n == 42 ) {
        echo "<b><u>$n</u></b></br>" ;} 
    else {
        // "</br>" permet d'aller à la ligne à chaque echo ( concaténation possible grâce au . ) . //
    echo $n . "</br>"; }
}
?>