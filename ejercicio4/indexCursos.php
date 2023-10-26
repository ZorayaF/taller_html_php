<?php
include __DIR__.'/models/curso.php';
include __DIR__.'/controllers/entityControllerCurso.php';
include __DIR__.'/controllers/cursos/cursoController.php';
include __DIR__.'/controllers/database/databaseController.php';

use App\controllers\cursos\CursoController;

$cursoController = new CursoController();
$listaCursos = $cursoController->allCurso();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Cursos</title>
</head>
<body>
    <h1>Lista de Cursos</h1>
    <!-- Enlace para ir al formulario de registro de cursos -->
    <a href="views/formularioCurso.php?operacion=add">Registrar Curso</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Código del Docente</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($listaCursos as $curso) {
                echo '<tr>';
                echo '  <td>' . $curso->get('cod') . '</td>';
                echo '  <td>' . $curso->get('nombre') . '</td>';
                echo '  <td>' . $curso->get('codDocente') . '</td>';
                echo '  <td>';
                echo '      <a href="views/formularioCurso.php?operacion=update&cod=' . $curso->get('cod') . '">Modificar</a>';
                echo '  </td>';
                echo '  <td>'; 
                echo '      <a href="views/confirEliminacionCurso.php?cod=' . $curso->get('cod') . '">Eliminar</a>';
                echo '  </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <a href="index.php">Ir al inicio</a>
</body>
</html>
