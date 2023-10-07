<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Circulo</title>
</head>
<body>
    <form action="areaCirculo.php" method="post">
        <input type="hidden" name="operacion" value="<?php echo $operacion?>">
        <div>
            <label>Radio: </label>
            <input type="number" step="any" name="radio" require value="<?php echo $circulo->set('radio')?>">
            <input type="text">
        </div>
        <button type="submit">Calcular</button>
    </form>    
</body>
</html>