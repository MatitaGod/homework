<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
if (isset($_POST['bt1'])) {
    $ciclos=0
    if($_POST['dato']>1 and $_POST['dato']<=1000){
        #calcula mullet
        $mullet=$_POST['dato']
        while ($mullet!=1) {
            if ($mullet % 2==0) {
                $mullet=$mullet/2;
                echo $mullet.' '; 
            }else {
                $mullet=$mullet*3+1;
                echo $mullet.' ';
            }
            $ciclos=$ciclos+1;
        }
        #respuesta
        echo 'El total de ciclos fue: '.$ciclos;

    }else {
        echo 'el numero ingresado debe estar entre (1,100)';
    }
}



?>