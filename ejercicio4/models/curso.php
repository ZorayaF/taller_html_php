<?php

namespace App\models;

class Curso{
    private $cod;
    private $nombre;
    private $codDocente;

    function get($prop){
        return $this->$prop;
    }

    function set($prop, $value){
        $this->$prop = $value;
    }
}
?>