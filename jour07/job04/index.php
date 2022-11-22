<?php
$a = 10;
$b = 6;
$operation="+";
function calcul($a, $operation, $b){
    // switch va enchainer "fontions" //
    switch ($operation){
        case '+' :
            $result = $a + $b;
            break;
        case '-' :
            $result = $a - $b;
            break;
        case '*' :
            $result = $a * $b;
            break;
        case '/' :
            $result = $a / $b;
            break;
        case '%' :
            $result = $a % $b;
            break;
        default:
            echo "Erreur";
            break;
        }   
    return $result;
 
}

echo calcul($a, $operation, $b)
?>