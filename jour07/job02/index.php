<?php
$jour = "";

function bonjour($jour){
    if($jour == true ){
        echo "bonjour";
    }
    if($jour == false ){
        echo "bonsoir";
    }
}
 bonjour(true);
 echo '</br>';
 bonjour(false);
?>
