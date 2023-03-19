<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form name="f1" action="guia_problema_02.php" method="post" >
Cree un arreglo con 30 valores aleatorios (random_int), luego busque en el arreglo un
determinado número indicado por el usuario.<br>
<input type="number" name="dato">
<input type="submit" name="bt1" value="buscar">
</form>
</body>
</html>


<?php
$numero=['0','2','4','6','8','10','12','14','16','18','20'];
if (isset($_POST['dato'])) {
    #buscar
    $bandera=0;
    for ($i=0;$i<count($numero);$i++) { 
        # code...
        if($numero[$i]==$_POST['dato']){
            $bandera=1;
            break;
        }
    }
if ($bandera==1) {
    echo 'el numero buscado esta en el arreglo';
}else {
    echo 'el numero buscado no esta en el arreglo';
}
}
?>