#construya una funcion que permita transformar de °kelvin a °celsius -> c°=K°-273,15
#diseñe fomulario para recibir la temperatura en K°
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>transforma de kelvin a grados celsius</p>
    <form name="f1" action="grados.php" method="post">
        ingrese grados kelvin<input type="number" name="grados" step="0.01">
        <br><input type="submit" name="bt1" value="transformar"><br>
    </form>
</body>
</html>
<?php
function transformar($kelvin){
    $celsius=$kelvin-273.15;
return ($celsius);
}if (isset($_POST['bt1'])) {
    # opcion 1 de como resolverlo
    echo $_POST['grados'].'°K => '.transformar($_POST['grados']).'°C <br>';
    #opcion 2 de como resolverlo
    $celsius=transformar($_POST['grados']);
    echo $_POST['grados'].'°K =>'. $celsius.'°C '; 
}
?>