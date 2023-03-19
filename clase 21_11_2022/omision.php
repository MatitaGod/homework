<?php
function suma($a,$b,$c){
    global $x;
    $s=$a+$b+$c;
    return $s;
}#programa inicial
$x=5;
$y=6;
$z=2;
echo 'La suma es: ' .suma($x,$y,$z);

?>