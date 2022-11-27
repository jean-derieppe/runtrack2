<?php
for ($n = 0; $n <= 1337; $n++ ){
    if ($n == 26 or $n == 37 or $n == 88 or $n == 1111) {
    // Si $n vaut 26 ou 37 ou 88 ou 1111, alors ne rien imprimer ( "" ) et aller à la ligne avec "</br>" ( grâce à la concaténation '.' ) . //
        echo "" . "</br>" ;
    } 
    else {
    // Sinon imprimer $n et faire un retour à la ligne . //
        echo $n . "</br>" ;
    }
}
?>