<?php

function calcule(int $a,string $operation, int $b){
// switch va enchainer les fontions //
switch ($operation){
    case '+' :
        $result = $a + $b;
        return $result;
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
    }   
}
// nombre aléatoire pour tester les opérations //
calcule(5, "+", 4)
?>