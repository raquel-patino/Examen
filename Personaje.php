<?php
class Vecino {

protected $nombre;
protected $piso;
protected $frasesRecurrentes;
protected $enemigo;

public function __construct($nombre, $piso, $frasesRecurrentes, $enemigo){
    $this->nombre=$nombre;
    $this->piso=$piso;
    $this->frasesRecurrentes=$frasesRecurrentes;
    $this->enemigo=$enemigo;

}

public function getPiso (){
    return $this->piso;
}

public function getNombre(){
    return $this->nombre;
}

public function getFrase(){
    return $this->frasesRecurrentes;
}
}