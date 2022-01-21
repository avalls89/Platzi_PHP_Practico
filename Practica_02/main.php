<?php

$palabras = array("sol", "lluna", "cielo", "llum", "estrella", "lluvia");



$formu = "<form action='analisis.php'>";

for($i=0; $i < count($palabras); $i++){
    $formu .= "La palabra: ".str_shuffle($palabras[$i]).
    " "."<input type='text' name='palabra".$i."'>".
    "<br>"; 
}

$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";


echo $formu.$button.$formCierre;

?>

