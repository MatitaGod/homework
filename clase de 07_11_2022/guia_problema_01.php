<?php
echo '<br> Cree un arreglo con 50 valores aleatorios (random_int), entre -100 y 100. Luego imprímalo
en pantalla, separando cada valor con un guion. <br>';
$arreglo=array();
for ($i=0;$i<50;$i++) { 
    # code...
    $arreglo[$i]=random_int(-100,100);
}
echo '<br>';
for ($i=0;$i<50;$i++) { 
    # code...
    echo $arreglo[$i].' ( ';
}

?>