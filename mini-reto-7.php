<!DOCTYPE html> 
<html lang="es">
<head> 
    <meta charset="UTF-8"> 
    <title>Calculadora Basica PHP</title>
</head>
<body> 
    <h2>Calculadora Básica</h2> 

    <form method="post"> 

        <label for="a">Número 1:</label>
        <input type="number" step="any" name="a" id="a" required>
        <br><br> 
        <label for="b">Número 2:</label> 
        <input type="number" step="any" name="b" id="b" required>
        <br><br>

        <label for="operacion">Operación:</label> 
        <select name="operacion" id="operacion" required>
            <option value="suma">Suma (+)</option> 
            <option value="resta">Resta (-)</option>
            <option value="multiplicacion">Multiplicación (×)</option>
            <option value="division">División (÷)</option>
        </select>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr> 
<?php
?>
<?php
function calcular($a, $b, $operacion) { 
    switch ($operacion) {
        case "suma": 
            return $a + $b; 
        case "resta":
            return $a - $b; 
        case "multiplicacion":
            return $a * $b;
        case "division":
        
            return ($b != 0) ? $a / $b : "Error: división por cero";
        default: 
            return "Operación no válida"; 
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $a = isset($_POST["a"]) ? (float) $_POST["a"] : 0.0; 
    $b = isset($_POST["b"]) ? (float) $_POST["b"] : 0.0;
    $operacion = isset($_POST["operacion"]) ? $_POST["operacion"] : "";

   
    $resultado = calcular($a, $b, $operacion);

    echo "<h3>Resultado: " . htmlspecialchars((string)$resultado, ENT_QUOTES, "UTF-8") . "</h3>";
}
?>
</body> <!-- Cierra el contenido visible -->
</html> <!-- Fin del documento HTML -->