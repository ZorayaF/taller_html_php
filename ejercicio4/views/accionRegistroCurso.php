<?php
include __DIR__ . '/../models/curso.php';
include __DIR__ . '/../controllers/entityControllerCurso.php';
include __DIR__ . '/../controllers/database/databaseController.php';
include __DIR__ . '/../controllers/cursos/cursoController.php';

use App\models\Curso;
use App\controllers\cursos\CursoController;

$curso = new Curso();
$curso->set('cod', $_POST['cod']);
$curso->set('nombre', $_POST['nombre']);
$curso->set('codDocente', $_POST['codDocente']);

$cursoController = new CursoController();

$resultado = $cursoController->addCurso($curso);

// Si $resultado == true, se ha guardado el registro con éxito.

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
