<?php

namespace App\controllers\docentes;

use App\controllers\EntityController;
use App\models\Docente;

class DocenteController extends EntityController{
  private $dataTable = 'docentes';

  function allData(){
    $sql = "select * from " . $this->dataTable;
    $resultSQL = $this->execSql($sql);
    $lista = [];
    if($resultSQL->num_rows > 0){
        while($item = $resultSQL->fetch_assoc()){
            $docente = new Docente();
            $docente->set('cod', $item['cod']);
            $docente->set('nombre',$item['nombre']);
            $docente->set('idOcupacion',$item['idOcupacion']);
            array_push($lista, $docente);
        }
    } 
    return $lista;
  }
}
?>