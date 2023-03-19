<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Una Encuesta de su cosas favoritas </h1>
    <form name="F1" action="form.php" method="post">
        ingrese nombre <input type="text" name="nn"><br>
        <p>Seleccione su animal faborito? <br>
            <input type="radio" name="tipo" value="gato">gato<br>
            <input type="radio" name="tipo" value="perro">perro<br>
        </p>
    <p> Seleccione medio de streaming favoritos<br>
        <input type="checkbox" name="streaming" value="netflix">netflix<br>
        <input type="checkbox" name="streaming" value="Amazon prime">Amazon prime<br>
        <input type="submit" name="Bt1" value="registrar">
    </p>
</form>
</body>
</html>
<?php
if (isset($_POST['Bt1'])) {
    # code...
    if (isset($_POST['tipo'])) {
        echo $_POST['nn'].' su animal favorito es '. $_POST['tipo'].'<br>';
    }else {
        echo $_POST['nn'].' no indico animal favorito ';
    }
    if (isset($_POST['netflix'])) {
        echo $_POST['nn'].' su medio de streaming favorito es '. $_POST['streaming']. '<br>';
    }else {
        echo $_POST['nn'].' no indico medio de streaming favorito ' ;
    } if (isset($_POST['streaming'])) {
        echo $_POST['nn'].' su medio de streaming favorito es '. $_POST['streaming'].'<br>';
    } else  {   echo $_POST['nn'].' no indico medio de streaming favorito ' ;
    }
}
?>