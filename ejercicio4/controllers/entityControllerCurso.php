<?php

namespace App\controllers;

use App\controllers\database\DatabaseController;

abstract class EntityControllerCurso{
    public abstract function allCurso();
    public abstract function getCurso($pk);
    public abstract function addCurso($model);
    public abstract function updateCurso($model);
    public abstract function deleteCurso($pk);

    protected function execSql($sql){
        $dbController = new DatabaseController();
        return $dbController->execSql($sql);
    }
}
?>