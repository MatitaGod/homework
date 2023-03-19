<?php
#definir el arreglo vacio
$arreglo=array();
#definir el arreglo con datos
$marcas=['toyota','mercedes','ferrari','lamborgini'];
$notas=[2,3,4,5,6,4];
echo '<br> funcion in_array <br>';
if(in_array('ferrari',$marcas)){
    echo 'ferrari esta en el arreglo ';
}else {
   echo 'ferrari no esta en el arreglo ';
}

#ver los datos de un arreglo
var_dump($marcas);
echo '<br>';
print_r($marcas);
echo '<br> arreglo marcas <br>';
for ($i=0;$i<4;$i++) { 
   # code...
   echo $marcas [$i].';';
}
echo '<br>Arreglo notas<br>';
#cont()--> retorna la cantidad de elementos del arreglo
for ($i=0; $i<count($notas); $i++) { 
    # code...{}
    echo $notas[$i].';';
} 
echo '<br> arrreglo notas con foreach <br>';
foreach($notas as $cursor){
    echo $cursor.' ';
}
#generar un arreglo con datos aleatorios
for ($i=0;$i<20;$i++) { 
    # code...
    $arreglo[$i]=random_int(0,100);
}
echo '<br>';
for ($i=0;$i<20;$i++) { 
    # code...
    echo $arreglo[$i].' ';
}

?>