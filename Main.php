<?php
require_once "Personaje.php";

$comunidad= [ new Vecino ("Paloma Cuesta", "2B", ["Hombre ya!", "que mal!"], "Concha" ),
            new Vecino ("Juan Cuesta", "2B", ["Que follon!", "vaya dia"], "Concha"),
            new Vecino ("Lucia Alvarez", "3B",[ "que mal!", "que casualidad"], "juan cuesta"),
            new Vecino ( "Emilio", "porteria",["no me pises lo fregao!","hombre ya"] , "concha")];


print_r(buscarVecinoPorPiso($comunidad, "2B"));
$arrayVecinoEncontrado =identificarVecinoBuscado($comunidad,"Emilio");
print_r(devolverFraseRecurrente($arrayVecinoEncontrado));

function buscarVecinoPorPiso ($comunidad, $piso){
    foreach ($comunidad as $vecino){
        if (strcasecmp($vecino->getPiso(), $piso)==0){
            $vecinos[]= $vecino->getNombre();
        }
    }
    return $vecinos;
}


 function identificarVecinoBuscado($comunidad, $nombre){
    $vecinoBuscado= array_filter($comunidad, function($vecino) use ($nombre){
        return ($vecino->getNombre() === $nombre);
    });
    return $vecinoBuscado;
 }

 
function devolverFraseRecurrente($arrayVecinoEncontrado){
    foreach($arrayVecinoEncontrado as $vecino){
         $frases[] = $vecino->getFrase()[array_rand($vecino->getFrase())];
    }
    return $frases;
}
?>