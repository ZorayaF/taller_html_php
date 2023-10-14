<?php
namespace   App\ejercicio1\index;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ordenar Lista de Números</title>
</head>
<body>
    <h1>Ordenar Lista de Números</h1>
    <form action="ordenar.php" method="post">
        <label for="numeros">Ingrese la lista de números separados por comas:</label>
        <input type="text" name="numeros" id="numeros">
        <input type="submit" value="Ordenar">
    </form>
</body>
</html>
