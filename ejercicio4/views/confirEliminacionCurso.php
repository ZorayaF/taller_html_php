<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmar Eliminación</title>
</head>
<body>
    <form action="accionCurso.php" method="post">
        <h1>Confirmar operación</h1>
        <p>¿Desea eliminar el curso?</p>
        <input type="hidden" name="cod" value="<?php echo $_GET['cod'] ?>">
        <input type="hidden" name="operacion" value="delete">
        <button type="submit">Sí</button>
        <a href="../index.php">No</a>
    </form>
</body>
</html>
