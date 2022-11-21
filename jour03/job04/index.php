<?php
    $str = "Dans l'espace, personne ne vous entend crier.";
    $caract = 0 ;
    echo "<b>$str</b><br><br>";
        for($i=0; isset($str[$i]); $i++){
            $caract++;
        }
        echo "La phrase contient $caract caractères";
?>