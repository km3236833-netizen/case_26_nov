<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Notas</title>
</head>
<body>

    <h2>Conversor de notas numéricas a letras</h2>

    <form method="post" action="">
        <label>Curso:</label><br>
        <input type="text" name="curso" required><br><br>

        <label>Nota (0 - 100):</label><br>
        <input type="number" name="nota" step="0.1" required><br><br>

        <button type="submit">Convertir</button>
    </form>

    <br>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "calificaciones.php";

        $curso = $_POST["curso"];
        $nota  = $_POST["nota"];

        echo convertirNota($nota, $curso);
    }
    ?>

</body>
</html>
