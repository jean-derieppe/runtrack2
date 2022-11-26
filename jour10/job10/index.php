<?php
//définir variable de connection a ma base de donnée SQL ( jour09) .
$mysqli = new mysqli('localhost','root','','jour09');

// requête Pour connaître le nombre de lignes totales dans une table .
$request = $mysqli -> query ("select * from salles order by capacite asc");

// affichage du résultat de la requête .
//$resultat_all = $request -> fetch_all();
//var_dump($resultat_all);

//while (($resultat_array = $request -> fetch_array()) != null){
//     var_dump($resultat_array);
//}

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
                <th>nom</th>
                <th>id_etage</th>
                <th>capacite</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while (($resultat = $request -> fetch_array()) != null){
                echo "<tr>";
                echo "<td>".$resultat['nom']."</td>";
                echo "<td>".$resultat['id_etage']."</td>";
                echo "<td>".$resultat['capacite']."</td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>