<?php
session_start();
// incrémenter 1  à la variable "nbvisites" //
isset($_SESSION['nbvisites']) ? $_SESSION['nbvisites']++ : $_SESSION['nbvisites'] = 0;

if (isset($_POST['reset'])){
    $_SESSION['nbvisites'] = 1;
}
// session_destroy quans reset ????? //
echo ' la page a été visité <b>' . $_SESSION['nbvisites'] . '</b> fois';

?>

<!-- HTML -->
<label>
<form method="post">
<label for="reset">Remettre à zéro le compteur de visite :</label><br>
<input type="submit" name="reset" value="Reset"> 
</form>
</label>
