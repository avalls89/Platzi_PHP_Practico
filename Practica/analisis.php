<?php

print_r($_REQUEST);

$words = array ("sol", "luna", "cielo");


if($_REQUEST["words0"] == $words[0]){
    echo "La palabra ingresada es correcta";
}else {
    echo "La palabra ingresada es incorrecta, la palabra es: ".$words[0]. "\n"; 
}

if($_REQUEST["words1"] == $words[1]){
    echo "La palabra ingresada es correcta";
}else {
    echo "La palabra ingresada es incorrecta, la palabra es: ".$words[1]. "\n"; 
}

if($_REQUEST["words2"] == $words[2]){
    echo "La palabra ingresada es correcta";
}else {
    echo "La palabra ingresada es incorrecta, la palabra es: ".$words[2]. "\n"; 
}


?>

