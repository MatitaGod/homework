<?php
$cont=0;
$res=random_int($_POST["min"]-10, $_POST["max"]+10);
while ($res < $_POST["max"] and $res > $_POST["min"]) {
$res=random_int($_POST["min"]-10, $_POST["max"]+10);
echo $res;}
?><br><?php
$cont++;
if ($cont = $_POST["max"]) 
 echo "El Programa finalizo, se hicieros estos numeros";
   $_POST

?>