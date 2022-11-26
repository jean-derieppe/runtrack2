<?php

$str = $_GET["str"] ;

function gras($str){
    $maj="ABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
    for ($i = 0 ; isset($str[$i]) ; $i++) { 
        for ($j = 0 ; isset($maj[$j]) ; $j++) { 
            if($maj[$j]==$str[$i] && ($str[$i-1] ==  " " || $i == 0)){
                echo "<b>" ;
            }
        } echo $str[$i] ;

            if(isset ($str[$i+1]) && ($str[$i+1]) ==  " "){
            echo "</b>" ;
            }
    }  
}
function cesar($str){
    for ($i = 0 ; isset($str[$i]) ; $i++){
        
    }
}

    if ($_GET["fonction"]=="fonction1") {
        echo gras($str);
}

?>