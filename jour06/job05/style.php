<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
if (isset($_GET["style"])){


    switch($_GET["style"]){
        case 'style1':
        echo'<link rel="stylesheet" href="style1.css">';
        break;

        case 'style2':
        echo'<link rel="stylesheet" href="style2.css">';
        break;

        case 'style3':
        echo'<link rel="stylesheet" href="style3.css">';
        break;
    }
}
?>

</head>

<header>
    <h1>Formulaire</h1>
</header>

<body>

    <contenant>
<!--  //    Créer une liste déroulante et un bouton submit , avec 3 fichier CSS qui agissent sur le design du formulaire ,
    la couleur du background, la police ed'écriture et plus encore     //  -->
    <div class="form">
        <form action="" method="get">
        <label for="case-select">Select a style :</label>
        <select name="style" id="case">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
        <option value="style3">style3</option>
        </select>
        
        <input type="submit" value="Envoyer le formulaire">

        </form>
    </div>
   

    </contenant>

</body>
</html>