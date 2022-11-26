<?php 
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $caract = 0;

        echo "<b>$str</b><br><br>";
        for($i=0; isset($str[$i]); $i++){ // on mesure la longueur de la chaine de caractère
            $caract++;
        }

        for ($i=1; $i < $caract; $i++){ // boucle permettant de remplacer le caractère par le suivant
            echo $str[$i]; //affichage tous les caractères sauf le premier (qui devient le dernier)
        }
        echo $str[0]; //affichage du premier en dernier
?>