<?php
#atrapamos el datos enviado en el formulario html
$a=$_POST["Dato"];
#si es positivo o negativo
if($a>=0){
    echo $a."es positivo";
}
if($a%2==0){
    echo"y es par";
}else{
    echo "y es impar";
}

?>