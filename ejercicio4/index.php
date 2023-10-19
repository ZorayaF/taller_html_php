<?php 
include __DIR__.'/models/docente.php';
include __DIR__.'/controllers/entityController.php';
include __DIR__.'/controllers/database/databaseController.php';
include __DIR__.'/controllers/docentes/docenteController.php';

use App\controllers\docentes\DocenteController;

$docenteController = new DocenteController();
$lista = $docenteController->allData();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión</title>
</head>
<body>
    <h1>Lista de docentes</h1>
    <a href=""></a>
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
            <?php //por aca quedamos pendientes ...
            foreach($lista as $docente){
                echo '<tr>';
                echo '  <td>'.$docente->get('cod').'</td>';
                echo '  <td>'.$docente->get('nombre').'</td>';
                echo '  <td>'.$docente->get('idOcupacion').'<td>';
                echo '  <td>';
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>