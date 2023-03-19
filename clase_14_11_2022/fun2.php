<?php
#paso de parametros
function suma($a,$b){
    $r=$a+$b;
    echo $a.'+'.$b.'='.$r;

}
$a=5;
$b=4;
suma($b,$a);
echo '<br>';
#construya una funcion que retorne el doble del valor recibido
function doble($c){
    $c=$c*2;
    return $c;
    
}
$x=10;
$c=doble($x);
echo '<br>opcion 1:' .$c;
echo '<br>opcion 2:' .doble($x);
#construya una funcion que indique si un valor recibido es negativo\positivo
function verificar($g){
    if($g>0 ){
        echo '<br>'.$g.' es positivo';
    }elseif($g==0){
        echo '<br>'.$g.' es neutro';
    }else{
        echo  '<br>'.$g.' es negativo';
    }
}
$var=-456789;
verificar($var);

?>