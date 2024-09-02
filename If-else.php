<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinación de Número Positivo o Negativo</title>
    <link rel="stylesheet" href="if-else.css">
</head>
<body>
    <div class="container">
        <h1>Verificador de Número</h1>
        <form method="post">
            <label for="numero">Ingresa un número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Verificar</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST['numero'];
                if ($numero > 0) {
                    echo "<p class='positivo'>El número $numero es positivo.</p>";
                } elseif ($numero < 0) {
                    echo "<p class='negativo'>El número $numero es negativo.</p>";
                } else {
                    echo "<p class='cero'>El número es cero.</p>";
                }
            }
        ?>
    </div>
</body>
</html>
