<?php

namespace App\controllers\cursos;

use App\controllers\EntityControllerCurso;
use App\models\Curso;

class CursoController extends EntityControllerCurso{
    private $cursoDT = 'cursos';
    private $codCurso = 'cod';
    private $nombreCurso = 'nombre';
    private $codDocenteCurso = 'codDocente';
    private $docenteDT = 'docentes';
    private $codD = 'cod';
    private $nombreD = 'nombre';

  function allCurso(){
    $sql = "SELECT C." . $this->codCurso . " AS CodigoCurso, C." . $this->nombreCurso . " AS NombreCurso, D." . $this->nombreD . " AS NombreDocente
            FROM " . $this->cursoDT . " C
            JOIN " . $this->docenteDT . " D ON C." . $this->codDocenteCurso . " = D." . $this->codD;

    $resultSQL = $this->execSql($sql);
    $lista = [];

    if($resultSQL->num_rows > 0){
        while($item = $resultSQL->fetch_assoc()){
            $curso = new Curso();
            $curso->set($this->codCurso, $item['CodigoCurso']);
            $curso->set($this->nombreCurso, $item['NombreCurso']);
            $curso->set($this->codDocenteCurso, $item['NombreDocente']);
            array_push($lista, $curso);
        }
    } 

    return $lista;
  }
  function getCurso($cod)
    {
        $sql = "SELECT * FROM " . $this->cursoDT . " WHERE $this->codCurso = $cod";
        $resultSQL = $this->execSql($sql);
        $curso = null;

        if ($resultSQL->num_rows > 0) {
            $item = $resultSQL->fetch_assoc();
            $curso = new Curso();
            $curso->set('cod', $item[$this->codCurso]);
            $curso->set('nombre', $item[$this->nombreCurso]);
            $curso->set('codDocente', $item[$this->codDocenteCurso]);
        }

        return $curso;
    }

  function addCurso($curso)
    {
        $cod = $curso->get('cod');
        $nombre = $curso->get('nombre');
        $codDocente = $curso->get('codDocente');

        // Verifica si el curso ya existe
        $registro = $this->getCurso($cod);
        if (isset($registro)) {
            return "El código de curso ya existe";
        }

        // Realiza la inserción del nuevo curso
        $sql = "INSERT INTO " . $this->cursoDT . " ($this->codCurso, $this->nombreCurso, $this->codDocenteCurso) VALUES ('$cod', '$nombre', '$codDocente')";
        $resultSQL = $this->execSql($sql);

        if (!$resultSQL) {
            return "No se pudo guardar el curso";
        }

        return "Curso guardado con éxito";
    }
    function updateCurso($curso)
    {
        $cod = $curso->get('cod');
        $nombre = $curso->get('nombre');
        $codDocente = $curso->get('codDocente');

        $registro = $this->getCurso($cod);
        if (!isset($registro)) {
            return "El curso no existe";
        }

        $sql = "UPDATE " . $this->cursoDT . " SET $this->nombreCurso = '$nombre', $this->codDocenteCurso = '$codDocente' WHERE $this->codCurso = '$cod'";
        $resultSQL = $this->execSql($sql);

        if (!$resultSQL) {
            return "No se pudo guardar el curso";
        }

        return "Curso actualizado con éxito";
    }

    function deleteCurso($cod)
    {
        $sql = "DELETE FROM " . $this->cursoDT . " WHERE $this->codCurso = $cod";
        $resultSQL = $this->execSql($sql);

        if ($resultSQL) {
            return "Curso eliminado";
        }

        return "No se pudo eliminar el curso";
        
    }
}
?>