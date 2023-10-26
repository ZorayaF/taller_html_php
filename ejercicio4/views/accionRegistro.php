<?php
include __DIR__ . '/../models/docente.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/database/databaseController.php';
include __DIR__ . '/../controllers/docentes/docenteController.php';

use App\models\Docente;
use App\controllers\docentes\DocenteController;

$docente = new Docente();
$docente->set('cod', $_POST['cod']);
$docente->set('nombre', $_POST['nombre']);
$docente->set('idOcupacion', $_POST['idOcupacion']);

$docenteController= new DocenteController();

$resultado = $docenteController->addItem($docente);

// si $resultado == true -> guardo el registro;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>