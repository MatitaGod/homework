<?php
#funcion
function saludo(){
    echo 'hola futuros informaticos';
}

function nombre(){
    $nombre='carlos poblete';
    return $nombre;
}

function numero(){
    $n=20;
    return $n;
}
#pp
#realizar la llamada a la funcion
saludo();
$x=nombre();
echo('<br>hola'.$x);

#funcion numero
$dato=numero();
$doble=2*$dato;
echo ('<br>'.$dato.'X 2 ='.$doble);

#construya una funcion que le retorne un saludo
function Rsaludo(){
    $var='hola a todos los chuchesumare';
    return $var;
}
$var=rsaludo();
echo('<br>'.$var);


?>