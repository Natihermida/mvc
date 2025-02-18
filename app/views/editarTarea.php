<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>

    <!-- Mostrar el formulario para editar la tarea -->
    <?php
    foreach ($data as $tarea) {
        echo "
        <form action='index.php?action=editar&id=".$tarea->id."' method='post'>
            <input type='text' name='descripcion' value='".$tarea->descripcion."' required>
            <input type='submit' value='Guardar cambios'>
        </form>";
    }
    ?>

    <br>
    <a href="index.php">Volver a la lista de tareas</a>
</body>
</html>
