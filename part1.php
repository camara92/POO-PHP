<?php

//conversion d'un tableau en objet 

$tab['couleur'] = "bleu"; 
$tab['type'] = "plume"; 
$tab['prix'] = 15; 
$stylo = (object)$tab; 

function printArray($arg){

    echo "<pre>"; 
    print_r($arg);
     echo "</pre>" ;
}
$ballonfoot = new stdClass; 
$ballonfoot->type= "Footbal"; 
var_dump($ballonfoot); 
var_dump($tab); 
print_r($stylo);
