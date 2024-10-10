<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Resaltados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Generación y Resaltado de Números</h1>
    </header>
    
    <ul id="lista-numeros">
        <?php
            // un bucle for del 1 al 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>$i</li>"; 
            }
        ?>
    </ul>

    <button id="click-boton">Resaltar</button>
    
    <script src="script.js"></script>
</body>
</html>