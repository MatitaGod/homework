<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="f1" action="ev3_matias_zambra1_francisco_tiznado2.php" method="post">
        <table width="100%" align="center" border="5">
            <tr><td>ingrese lado/radio de la figura</td>
                <td><input type="number" name="lado" min=1 max=100 required><br></td></tr><tr>
                    <td><input type="radio" name="Cuadrado">cuadrado<br></td>
                    <td><input type="radio" name="circulo">circulo<br></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=[perimetro]>perimetro<br></td>
                    <td><input type="checkbox" name=[area]>area<br></td></tr>
            <td><input type="submit" name="bt1" value="calcular"><br></td>
        </table>
</form>
</body>
</html>

<?php
function medidas($lado){ 
    if($lado){
    $area=$lado^2;
    $perimetro=$lado*4;
    echo $area. '<br>';
    return ($lado) ;
    }elseif($lado){
        $area=3.141592*$radio^2;
        $Perimetro=2*3.141592*$radio;
        return ($lado);
    }

} if (isset($_POST['bt1'])) {
    $perimetro=$_POST['perimetro'];
    $area=$_POST['area'];
    $lado=$_POST['lado'];
    echo $_POST['lado']. medidas($_POST['lado'])."<br>";
    
}

?>