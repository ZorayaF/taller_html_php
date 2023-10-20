<?php

namespace App\controllers\docentes;

use App\controllers\EntityController;
use App\models\Docente;

class DocenteController extends EntityController{
  private $docenteDT = 'docentes';
  private $ocupacionDT = 'ocupaciones';


  private $codD= 'cod';
  private $nombreD = 'nombre';
  private $ocupacionD = 'idOcupacion';
  private $codigoO = 'id';
  private $nombreO = 'nombre';

  function allData(){
    $sql = "SELECT D." . $this->codD . " AS CodigoDocente , D." . $this->nombreD . " AS NombreDocente, O." . $this->nombreO . " AS NombreOcupacion
            FROM " . $this->docenteDT . " D
            JOIN " . $this->ocupacionDT . " O ON D." . $this->ocupacionD . " = O." . $this->codigoO;;


    $resultSQL = $this->execSql($sql);
    $lista = [];
    if($resultSQL->num_rows > 0){
        while($item = $resultSQL->fetch_assoc()){
            $docente = new Docente();
            $docente->set('cod', $item['CodigoDocente']);
            $docente->set('nombre',$item['NombreDocente']);
            $docente->set('idOcupacion',$item['NombreOcupacion']);
            array_push($lista, $docente);
        }
    } 
    return $lista;
  }
}
?>