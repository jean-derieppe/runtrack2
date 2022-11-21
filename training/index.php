<!-- Partie PHP -->
<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$caract = 0;
    echo "<b>$str</b><br><br>";
    for($i=0; isset($str[$i]); $i++){ // on mesure la longueur de la chaine de caractère
            $caract++;
    }

    echo "La phrase à l'envers est :<br>";
    for ($j = $caract-1; $j >= 0; $j--) { //écriture de la phrase en partant de la fin (décrémentation de i)
        echo $str[$j];
    }
?>