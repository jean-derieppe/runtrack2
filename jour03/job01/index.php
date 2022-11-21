<?php
$tableau = array (200, 204, 173, 98, 171, 404, 459);

foreach($tableau as $result){
    if ($result%2) {
        //affichage des nombres paires
        echo "$result est impair <br />";
    }
    else {
        echo "$result est pair <br />";
        //affichage des nombres 
    }
}

?>