<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Evaluacion tipo practica</h1>
<form name="F1" action="e1_Matias_Zambra1_Francisco-tiznado2.php" method="post">
    <p>
        ingrese 3 numeros<br>
        <input type="number" name="N°1"><br>
        <input type="number" name="N°2"><br>
        <input type="number" name="N°3"><br>
        <input type="submit" name="Bt1" value="Registrar">
    </p>
</form>
</body>
</html>
<?php
if (isset($_POST['Bt1'])) {
    $a=$_POST['N°1'];
    $b=$_POST['N°2'];
    $c=$_POST['N°3'];

}
?>