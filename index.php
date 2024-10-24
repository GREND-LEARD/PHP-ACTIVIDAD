<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Notas</title>
</head>
<body>
<h1>Calculadora de Promedio de Notas</h1>
<form method="post">
    <label for="notas">Introduce tus notas (separadas por comas):</label>
    <input type="text" id="notas" name="notas" placeholder="Ejemplo: 8, 9, 7, 6" required>
    <button type="submit">Calcular Promedio</button>
</form>

<div id="resultado">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener las notas del formulario
        $inputNotas = $_POST['notas'];
        $notas = array_map('floatval', explode(',', $inputNotas)); // Convertir a array de números

        // Comprobar si las notas son válidas
        if (empty($notas) || array_filter($notas, 'is_nan')) {
            echo "Por favor, introduce notas válidas.";
        } else {
            // Calcular el promedio
            $promedio = array_sum($notas) / count($notas);

            // Mostrar el resultado
            echo "Tu promedio es " . number_format($promedio, 2) . ". ";
            if ($promedio >= 6) {
                echo "¡Aprobaste!";
            } else {
                echo "No aprobaste.";
            }
        }
    }
    ?>
</div>
</body>
</html>
 