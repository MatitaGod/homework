<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Veterinaria </h1>
    <form name="F1" action="evaluacion_N°2.php" method="post">
       ¿cuanto pesa el can?<br>
        <input type="number" name="Kg"><br>
        <input type="submit" name="Bt1" value="registrar">
</form>
</body>
</html>
<?php
if (isset($_POST['Kg'])) {
    $kg=$_POST['Kg'];
    if($kg < 10){
        echo 'debe de proporcionar 100grs al dia';
    }elseif($kg > 10){
        echo 'debe de proporcionar 200grs al dia';
    }if($kg > 20){
        echo 'debe de proporcionar 350grs al dia';
    }elseif($kg > 30){
        echo 'debe de proporcionar hasta 450grs al dia';
    }


}
?>