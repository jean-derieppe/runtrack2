<?php
// $count sera un compteur initialisé à zéro
    $count = 0;
// définir foreach : chercher dans un tableau 1 à 1. 

    // définir la boucle foreach et son action avec $_get et $args (Variable prédéfini ? convention ? )
    foreach($_GET as $args => $value){
        // convention de $len ? ( boucle , tableau ? )
        $len=0;
        for($i = 0; isset($value[$i]); $i++){
            $len++;
        }
        if ($len>0){ // on ne compte que les champs remplis
            $count++;
        }
//                  faire des var_dump pour tester le code   !!!!!                   //////// 
    }
    echo "le nombre d'argument GET envoyé est : ".$count;
// faire une boucle avec la fonction isset qui va faire une incrémentation pour chaque valeur trouvé //
?>
