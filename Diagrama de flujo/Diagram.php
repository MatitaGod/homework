<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="F1" action="Diagram.php" method="post">
     ingrese base <input type="number" name="potencia"><br>
     ingrese exponente <input type="number" name="expo"><br>
     <input type="submit" name="Bt1" value="determinar potencia">
    </form>
</body>
</html>
<?php
if (isset($_POST['Bt1'])) {
$Base=$_POST['potencia'];
$e=$_POST['expo'];
$acumulador=1;
if ($e>0) {
    #calcular potencia
    for ($i=1;$i<=$e;$i++) { 
        $acumulador=$acumulador*$Base;
    }
    echo '<b>'.$Base.'^'.$e.'='.$acumulador.'</b>';
}else {
    #no calculamos
    echo 'Aun no trabajo con negativos';
    
}
}
?>