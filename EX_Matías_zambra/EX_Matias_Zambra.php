<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicacion</title>
</head>
<body>
<h2>Tablas de Multiplicar</h2>
<table>
    <tr>
        <td>
        <form name="F1" action="EX_Matias_Zambra.php" method="post">
            <label>¿quieres saberte las tablas? <br>Presiona el boton correspondiente a la tabla y despues envialo con el boton Enviar </label><br>
            <br> 
            <input type="checkbox" name="numbersitos[]" value="6" /> Tabla del 6 <br>
            <input type="checkbox" name="numbersitos[]" value="7" /> Tabla del 7 <br>
            <input type="checkbox" name="numbersitos[]" value="8" /> Tabla del 8 <br>
            <input type="checkbox" name="numbersitos[]" value="9" /> Tabla del 9 <br>
            <input type="checkbox" name="numbersitos[]" value="10"/> Tabla del 10 <br>
            <input type="checkbox" name="numbersitos[]" value="11"/> Tabla del 11 <br>
            <input type="checkbox" name="numbersitos[]" value="12"/> Tabla del 12 <br>
        </td>  <td></td><input type="submit" name="Bt1" value="Enviar" /></td>
    </tr>
  <br>
</form></table>
</body>
</html>


<?php
if (isset($_POST['Bt1'])) {
    $numeros = isset($_POST['numbersitos']) ? $_POST['numbersitos'] : array();
    //---------------------------------------------------------------3
  foreach ($numeros as $numerrorro) {
    echo "<br>Tabla del $numerrorro<br>";
    //--------------------------------
    for ($i = 1; $i <= 50; $i++) {
      echo "<tr>";
      echo "<td>$numerrorro</td>";
      echo "<td>x</td>";
      echo "<td>$i</td>";
      echo "<td>=</td>";
      echo "<td>".$numerrorro * $i."</td>";
      echo "</tr>";
    }
    

  }
}
?>