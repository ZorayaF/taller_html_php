<?php
include __DIR__ . '/../models/curso.php';
include __DIR__ . '/../controllers/entityControllerCurso.php';
include __DIR__ . '/../controllers/database/databaseController.php';
include __DIR__ . '/../controllers/cursos/cursoController.php';

use App\models\Curso;
use App\controllers\cursos\CursoController;

$operacion = $_GET['operacion'];
$curso = new Curso();
if ($operacion == 'update') {
    $controlador = new CursoController();
    $curso = $controlador->getCurso($_GET['cod']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Curso</title>
</head>
<body>
    <h1>Editar Datos del Curso</h1>
    <?php
    if (!isset($curso)) {
        echo '<p>El curso no existe</p>';
        die();
    }
    ?>
    <form action="accionCurso.php" method="post">
        <input type="hidden" name="operacion" value="<?php echo $operacion; ?>">
        <div>
            <label>Código del Curso:</label>
            <input
                type="text"
                name="cod"
                required
                value="<?php echo $curso->get('cod'); ?>"
                <?php echo $operacion == 'update' ? 'readonly' : '';  ?>
            >
        </div>
        <div>
            <label>Nombre del Curso:</label>
            <input type="text" name="nombre" required value="<?php echo $curso->get('nombre'); ?>">
        </div>
        <div>
            <label>Código del Docente:</label>
            <input type="text" name="codDocente" required value="<?php echo $curso->get('codDocente'); ?>">
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
    <a href="../indexCursos.php">Atrás</a>
</body>
</html>
