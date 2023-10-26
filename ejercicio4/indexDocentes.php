<?php 
include __DIR__.'/models/docente.php';
include __DIR__.'/controllers/entityController.php';
include __DIR__.'/controllers/database/databaseController.php';
include __DIR__.'/controllers/docentes/docenteController.php';


use App\controllers\cursos\CursoController;
use App\controllers\docentes\DocenteController;

$docenteController = new DocenteController();
$listaDocentes = $docenteController->allData();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión</title>
</head>
<body>
    <h1>Lista de docentes</h1>
    <!-- ir a formularioDocente para registrar -->
    <a href="views/formularioDocente.php?operacion=add">Registrar</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>idOcupacion</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($listaDocentes as $docente){
                echo '<tr>';
                echo '  <td>'.$docente->get('cod').'</td>';
                echo '  <td>'.$docente->get('nombre').'</td>';
                echo '  <td>'.$docente->get('idOcupacion').'<td>';
                echo '  <td>';
                echo '      <a href="views/formularioDocente.php?operacion=update&cod=' . $docente->get('cod') . '">Modificar</a>';
                echo '  </td>';
                echo '  <td>'; 
                echo '      <a href="views/confirEliminacionDocente.php?cod=' . $docente->get('cod') . '">Eliminar</a>';
                echo '  </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>