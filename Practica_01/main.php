<?php

$words = array("sol", "lluna", "cielo", "llum", "estrella", "lluvia");
$messywords= array();


for($i=0; $i <count($words) ; $i++){
   $messywords[$i] = str_shuffle($words[$i]); 
}

print_r($messywords);
echo "
<form action ='analisis.php'>
    <input type='text' name='words0'>
    <input type='text' name='words1'>
    <input type='text' name='words2'>
    <button type='submit'>Enviar</button>
</form>
";

?>

