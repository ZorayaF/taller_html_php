<?php

namespace App\models;

class Docente{
    private $cod;
    private $nombre;
    private $idOcupacion;

    function get($prop){
        return $this->$prop;
    }

    function set($prop, $value){
        $this->$prop = $value;
    }
}
?>