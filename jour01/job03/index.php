
<?php
$nom=["boolean", "int", "floats", "string"] ;
$type=["bool", "int", "floats", "str"];
$val=["true", "1", "1,1", "abc"];

<table border="1">
<tr>
   <td><?php echo $nom[0]?></td>
   <td><?php echo $nom[1]?></td>
   <td><?php echo $nom[2]?></td>
   <td><?php echo $nom[3]?></td>
</tr>
<tr>
   <td><?php echo $type[0]?></td>
   <td><?php echo $type[1]?></td>
   <td><?php echo $type[2]?></td>
   <td><?php echo $type[3]?></td>
</tr>
<tr>
   <td><?php echo $val[0]?></td>
   <td><?php echo $val[1]?></td>
   <td><?php echo $val[2]?></td>
   <td><?php echo $val[3]?></td>
