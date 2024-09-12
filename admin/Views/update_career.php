<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Carrera</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Actualizar Carrera</h1>
    <form action="../Controllers/update_career_code.php" method="POST">
        <input type="hidden" name="idCareer" value="<?php echo $career['id_career']; ?>">
        <div class="form-group">
            <label for="name">Nombre de la Carrera:</label>
            <input type="text" class="form-control" id="nameCareer" name="nameCareer" value="<?php echo $career['name_career']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción de la Carrera:</label>
            <textarea class="form-control" id="descriptionCareer" name="descriptionCareer" rows="3" required><?php echo $career['description_career']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Actualizar Carrera</button>
        <a href="../Views/index_career.php" class="btn btn-danger mt-4">Regresar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
