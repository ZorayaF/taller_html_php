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
  function getItem($cod)
    {
      $sql = "select * from " . $this->docenteDT . " where ".$this->codD." = " . $cod;
        $resultSQL = $this->execSql($sql);
        $docente = null;
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $docente = new Docente();
                $docente->set('cod', $item['cod']);
                $docente->set('nombre', $item['nombre']);
                $docente->set('idOcupacion', $item['idOcupacion']);
                break;
            }
        }
        return $docente;
    }

  function addItem($docente)
    {
        $cod = $docente->get('cod');
        $nombre = $docente->get('nombre');
        $idOcupacion = $docente->get('idOcupacion');
        $registro = $this->getItem($cod);
        if (isset($registro)) {
            return "El código ya existe";
        }
        //reviasr esto
        $sql = "Insert into " . $this->docenteDT . " (cod,nombre,idOcupacion)value ('$cod','$nombre','$idOcupacion')";
        $resultSQL = $this->execSql($sql);
        if (!$resultSQL) {
            return "no se guardo";
        }
        return "se guardo con exito";
    }
    function updateItem($docente)
    {
        $cod = $docente->get('cod');
        $nombre = $docente->get('nombre');
        $idOcupacion = $docente->get('idOcupacion');
        $registro = $this->getItem($cod);
        if (!isset($registro)) {
            return "El registro no existe";
        }
        $sql = "update " . $this->docenteDT . " set ";
        $sql .= "nombre='$nombre',";
        $sql .= "idOcupacion='$idOcupacion' ";
        $sql .= " where cod=$cod";

        $resultSQL = $this->execSql($sql);
        if (!$resultSQL) {
            return "no se guardo";
        }
        return "se guardo con exito";
    }

    function deleteItem($cod)
    {
            $sql_get_cod = "SELECT cod FROM " .$this->docenteDT . " WHERE cod = $cod";
            $result_get_cod = $this->execSql($sql_get_cod);
        
            if ($result_get_cod->num_rows > 0) {
                $row = $result_get_cod->fetch_assoc();
                $codDocente = $row['cod'];
            } else {
                return "El docente no existe";
            }
            // Ahora, eliminamos los registros en la tabla "cursos" relacionados con el docente
            $sql_delete_cursos = "DELETE FROM cursos WHERE codDocente = $codDocente";
            $result_delete_cursos = $this->execSql($sql_delete_cursos);
        
            // Si se eliminaron con éxito los registros en la tabla "cursos", procedemos a eliminar al docente
            if ($result_delete_cursos) {
                $sql_delete_docente = "DELETE FROM " . $this->docenteDT . " WHERE cod = $cod";
                $result_delete_docente = $this->execSql($sql_delete_docente);
                if ($result_delete_docente) {
                    return "Registro eliminado";
                }
            }
        
            return "No se pudo eliminar el registro";
        
    }
}
?>