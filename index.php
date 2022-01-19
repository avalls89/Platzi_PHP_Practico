<?php

<<<<<<< HEAD
$nombre = "Camila";
$lastname = "Perez";

echo $nombre.' '.$lastname;
=======
$name = "Camila";
$lastname = "Perez";

echo $name.' '.$lastname;

function concatenar($name, $lastname){
    echo $name.' '.$lastname;
}

concatenar("Pepa", "Rojas");

function sumarNumeros($numeros) {
    $suma = 0;
    for ($i=0; $i <4 ; $i++ ){
        $suma = $suma + $numeros[$i];
    }
    echo "La suma es: ".$suma;
}

echo "\n";

$numeros = array(1,2,3,4);
sumarNumeros($numeros);

echo "\n";


$nombres = array("Anna", "Joan", "Camila");
var_dump(is_array($nombres));

echo "\n";

echo max(9,4,3,2,6);
echo "\n";
echo min(9,4,3,2,6);

echo "\n";
echo rand(5, 65);

echo "\n";
echo sqrt(5);
>>>>>>> bc817f09ca8b5f9eb334b6888ec1c3bd72e3fa00

?>