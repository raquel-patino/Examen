<?php
require_once "Personaje.php";

$comunidad= [ new Vecino ("Paloma Cuesta", "2B", ["Hombre ya!", "que mal!"], "Concha" ),
            new Vecino ("Juan Cuesta", "2B", ["Que follon!", "vaya dia"], "Concha"),
            new Vecino ("Lucia Alvarez", "3B",[ "que mal!", "que casualidad"], "juan cuesta"),
            new Vecino ( "Emilio", "porteria",["no me pises lo fregao!","hombre ya"] , "concha")];


print_r(buscarPiso($comunidad, "2B"));
print_r(devolverFraseRecurrente($comunidad, "Emilio"));

function buscarPiso ($comunidad, $piso){
    foreach ($comunidad as $vecino){
        if (strcasecmp($vecino->getPiso(), $piso)==0){
            $vecinos[]= $vecino->getNombre();
        }
    }
    return $vecinos;
}

function devolverFraseRecurrente($comunidad, $nombre){
    foreach ($comunidad as $vecino){
        if (strcasecmp($vecino->getNombre(), $nombre)==0){
            $fraseRecurrente[]=$vecino->getFrase();
        }
    }
    return $fraseRecurrente;
}










?>