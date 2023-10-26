<?php
include __DIR__ . '/../models/docente.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/database/databaseController.php';
include __DIR__ . '/../controllers/docentes/docenteController.php';

use App\models\Docente;
use App\controllers\docentes\DocenteController;

$operacion = $_GET['operacion'];
$docente = new Docente();
if($operacion=='update'){
    $controlador = new DocenteController();
    $docente = $controlador->getItem($_GET['cod']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Datos del docente</h1>
    <?php
        if(!isset($docente)){
            echo '<p>El registro no existe</p>';
            die();
        }
    ?>
    <form action="accionDocente.php" method="post">
        <input type="hidden" name="operacion" value="<?php echo $operacion; ?>">
        <div>
            <label>Código:</label>
            <input 
                type="text" 
                name="cod" 
                require 
                value="<?php echo $docente->get('cod'); ?>"                 
                <?php echo $operacion=='update'?'readonly':'';  ?>
            >
        </div>
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" require value="<?php echo $docente->get('nombre'); ?>">
        </div>
        <div>
            <label>Ocupación:</label>
            <input type="text" name="idOcupacion" require value="<?php echo $docente->get('idOcupacion'); ?>">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>