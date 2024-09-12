<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Estudiante</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Crear Nuevo Estudiante</h1>
    <form action="../Controllers/create_student_code.php" method="POST">
        <div class="form-group">
            <label for="name">Nombre del Estudiante:</label>
            <input type="text" class="form-control" id="nameStudent" name="nameStudent" required>
        </div>
        <div class="form-group">
            <label for="lastName">Apellido del Estudiante:</label>
            <input type="text" class="form-control" id="lastNameStudent" name="lastNameStudent" required>
        </div>
        <div class="form-group">
            <label for="code">Código del Estudiante:</label>
            <input type="text" class="form-control" id="codeStudent" name="codeStudent" required>
        </div>
        <div class="form-group">
            <label for="career">Carrera:</label>
            <select class="form-control" id="careerStudent" name="careerStudent" required>
                <option value="">Selecciona una carrera</option>
                    <?php 
                    // Obtener todas las carreras disponibles
                    include '../Controllers/index_code.php';
                    // Mostrar opciones para cada carrera
                    foreach ($careers as $career): ?>
                        <option value="<?php echo $career['id_career']; ?>"><?php echo $career['name_career']; ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-4">Guardar Nuevo Estudiante</button>
        <a href="./index_student.php" class="btn btn-danger mt-4">Regresar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
