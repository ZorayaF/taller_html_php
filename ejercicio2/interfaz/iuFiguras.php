<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Área</title>
</head>
<body>
    <h1>Calculadora de Área</h1>
    
    <form action="/ejercicio2/interfaz/procesamientoDatos.php" method="post">
        <label>Circulo:</label><br>
        <label>Radio: </label>
        <input type="number" step="any" name="radio">
        <input type="submit" value="Calcular Área" name="areaCirculo">
    </form>
    <form action="/ejercicio2/interfaz/procesamientoDatos.php" method="post">
    <label>Cuadrado:</label><br>
        <label>Lado: </label>
        <input type="number" step="any" name="lado">
        <input type="submit" value="Calcular Área" name="areaCuadrado">
    </form>
    <form action="/ejercicio2/interfaz/procesamientoDatos.php" method="post">
    <label>Rectángulo:</label><br>
        <label>Base: </label>
        <input type="number" step="any" name="baseR">
        <label>Altura: </label>
        <input type="number" step="any" name="alturaR">
        <input type="submit" value="Calcular Área" name="areaRectangulo">
    </form>
    <form action="/ejercicio2/interfaz/procesamientoDatos.php" method="post">
    <label>Triángulo:</label><br>
        <label>Base: </label>
        <input type="number" step="any" name="baseT">
        <label>Altura: </label>
        <input type="number" step="any" name="alturaT">
        <input type="submit" value="Calcular Área" name="areaTriangulo">
    </form>

</body>
</html>