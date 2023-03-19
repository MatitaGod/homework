<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>escribe un numero</P>
<form>
    <input type="text" id="valor" value="" placeholder="introduce un valor numerico">
    <input type="submit" onclick="return parImpar()" value="par/impar"





<div> id="resultado"></div>

 


</form>  
</body>
</html>
<?php
$num = 22;

if (($num % 2) == 0) {
    
    echo 'Es un número par';
} else {
    
    echo 'Es un número impar';
}