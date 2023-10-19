<?php

namespace App\controllers;

use App\controllers\database\DatabaseController;

abstract class EntityController{
    public abstract function allData();

    protected function execSql($sql){
        $dbController = new DatabaseController();
        return $dbController->execSql($sql);
    }
}
?>