<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jour08 Job03</h1>
    
    <form action="" method="post">
    <input type="text" name="prenom" placeholder="Entrez votre prénom">
    <input type="submit" value="Envoyer">
    </form>
</body>
</html>

    <?php
        if (isset($_POST['prenom'])) {
            $_SESSION['prenom'][] = $_POST['prenom'];
        }

    ?>

    <ul>
        <?php
            if (isset($_SESSION['prenom'])) {
                foreach ($_SESSION['prenom'] as $index => $value) {
                    echo '<li>' . $value . '</li>';
                } 
            }
        ?>
    </ul>
    <form action="" method="post">
        <br>
        <br>
        <label for="reset">Effacez la liste de prénom :</label><br>
        <input type='submit' value='reset' name='reset'>
        <br>
        <br>
    </form>

    <?php
    //reset
    if (isset($_POST['reset'])) {
        unset($_SESSION['prenom']);
    }

    ?>