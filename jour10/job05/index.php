<?php
//définir variable de connection a ma base de donnée SQL ( jour09) .
$mysqli = new mysqli('localhost','root','','jour09');
// requête pour récuperer les données dans une table précise .
$request = $mysqli -> query ("SELECT `id`, `prenom`, `nom`, `naissance`, `sexe`, `email` FROM `etudiants` WHERE `naissance` > '2004-01-01'");
// affichage du résultat de la requête .
//$resultat_all = $request -> fetch_all();
//var_dump($resultat_all);

while (($resultat_array = $request -> fetch_array()) != null){
     var_dump($resultat_array);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <title>job01</title>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while (($resultat = $request -> fetch_array()) != null){
                echo "<tr>";
                echo "<td>".$resultat['prenom']."</td>";
                echo "<td>".$resultat['nom']."</td>";
                echo "<td>".$resultat['naissance']."</td>";
                echo "<td>".$resultat['sexe']."</td>";
                echo "<td>".$resultat['email']."</td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>