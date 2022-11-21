<?php
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie ." ;
    for($i = 0; isset($str[$i]); $i += 2){
        echo $str[$i];// afficher 1 caractéres sur 2 .  //
    }
?>