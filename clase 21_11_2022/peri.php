#construya una funcion que permita deteerminar el perimetro de un triangulo.
#corresponde a la suma de sus lados.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>determinar el perimetro de un triangulo</p>
    <form name="f1" action="peri.php"  method="post">
        ingrese lado 1<input type="number" name="lado1" step="0.01" ><br>
        ingrese lado 2<input type="number" name="lado2" step="0.01" ><br>
        ingrese lado 3<input type="number" name="lado3" step="0.01" ><br>
        <input type="submit" name="bt1" value="calculo"> 
    </form>
</body>
</html>
<?php
function perimetro($l1,$l2,$l3){
    $p=$l1+$l2+$l3;
    return $p;
}
if (isset($_POST['bt1'])){
    $lado1=$_POST['lado1'];
    $lado2=$_POST['lado2'];
    $lado3=$_POST['lado3'];
    echo 'El perimetro del triangulo es: ' .perimetro($lado1,$lado2,$lado3);

}


?>