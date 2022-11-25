<?php
if (isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, time() + 3600); //dure 1 an
}
else {
    setcookie('nbvisites', '1', time() + 3600);
}
//reset de cookie
if (isset($_POST['reset'])) {
    setcookie('nbvisites', '1', time() + 3600);
    $_COOKIE['nbvisites'] = 1;
}

echo 'La page a été visité <b>' . $_COOKIE['nbvisites'] . '</b> fois';
?>
<!-- HTML -->
<form action="" method="post">
<br>
<br>
<label for="reset">Remettre à zéro le compteur de visite :</label><br>
<input type='submit' value='reset' name='reset'>
<br>
<br>
</form>