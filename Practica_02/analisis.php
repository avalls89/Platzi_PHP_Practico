<?php

// print_r($_REQUEST);

$words = array("sol", "lluna", "cielo", "llum", "estrella", "lluvia");
echo "<br>";

for ( $i= 0 ; $i < count($words); $i++){
    if($_REQUEST["palabra".$i] == $words[$i]){
        echo "La palabra ingresada es correcta"."<br>";;
    }else {
        echo "La palabra ingresada es incorrecta, la palabra es: ".$words[$i]. "<br>"; 
    }
}

?>

