
<?php
$str = 'Hello';

$integer = 8;

$myBool = true;

$float = 2.5;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
</body>
</html>
<table border="1">
<tr>
   <th>Type</th>
   <th>Nom</th>
   <th>Valeur</th>
</tr>
      <tr>
         <td><?php echo gettype($str) ?></td>
         <td>str</td>
         <td><?php echo $str; ?></td>
      </tr>

      <tr>
         <td><?php echo gettype($integer) ?></td>
         <td>integer</td>
         <td><?php echo $integer; ?></td>
      </tr>

      <tr>
         <td><?php echo gettype($myBool) ?></td>
         <td>myBool</td>
         <td><?php echo $myBool; ?></td> 
      </tr>

      <tr>
         <td><?php echo gettype($float) ?></td>
         <td>float</td>
         <td><?php echo $float; ?></td>
      </tr>
