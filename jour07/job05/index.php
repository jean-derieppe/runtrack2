<?php
// définir les variables //
$str = "bonjour";
$char= "o";
// définir la foncton//
function occurences($str,$char){
    $count = 0;
    // pour $i chercher dans 
    for ($i=0; isset($str[$i]); $i++){
        if($char===$str[$i]){
            $count++;
        }
    }
    echo $count;
}

?>