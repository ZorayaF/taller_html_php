<?php
include __DIR__ . '/../models/curso.php';
include __DIR__ . '/../controllers/entityControllerCurso.php';
include __DIR__ . '/../controllers/database/databaseController.php';
include __DIR__ . '/../controllers/cursos/cursoController.php';

use App\models\Curso;
use App\controllers\cursos\CursoController;

$operacion = $_POST['operacion'];
$resultado = '';
$cursoController = new CursoController();

if ($operacion == 'delete') {
    $resultado = $cursoController->deleteCurso($_POST['cod']);
} else {
    $curso = new Curso();
    $curso->set('cod', $_POST['cod']);
    $curso->set('nombre', $_POST['nombre']);
    $curso->set('codDocente', $_POST['codDocente']);
    $resultado = $operacion == 'update'
        ? $cursoController->updateCurso($curso)
        : $cursoController->addCurso($curso);
}

// si $resultado == true -> guardo el registro;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acción de Curso</title>
</head>
<body>
    <?php
    echo $resultado;
    ?>
    <a href="../indexCurso.php">Ir al inicio</a>
</body>
</html>
