<?php
session_start();
if ($_SESSION['user'] == "") {
    header("Location: ../../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carreras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="container mt-5">
        <h1 class="mb-4">Crear Nueva Carrera</h1>
        <form action="../Controllers/create_career_code.php" method="POST">
            <div class="form-group">
                <label for="name">Nombre de la Carrera:</label>
                <input type="text" class="form-control" id="nameCareer" name="nameCareer" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción de la Carrera:</label>
                <textarea class="form-control" id="descriptionCareer" name="descriptionCareer" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Guardar Nueva Carrera</button>
            <a href="./index_career.php" class="btn btn-danger mt-4">Regresar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>