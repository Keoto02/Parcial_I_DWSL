<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Estudiante</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Actualizar Estudiante</h1>
    <form action="../Controllers/update_student_code.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $student['id_student']; ?>">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $student['name_student']; ?>" required>
        </div>
        <div class="form-group">
            <label for="last_name">Apellido:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $student['last_name_student']; ?>" required>
        </div>
        <div class="form-group">
            <label for="code">Código:</label>
            <input type="text" class="form-control" id="code" name="code" value="<?php echo $student['code_student']; ?>" required>
        </div>
        <div class="form-group">
            <label for="career">Carrera:</label>
            <select class="form-control" id="career" name="career" required>
                <option value="">Selecciona una carrera</option>
                <?php 
                    // Obtener todas las carreras disponibles
                    include '../Controllers/index_code.php';

                    // Mostrar opciones para cada carrera
                    foreach ($careers as $career):
                        // Verificar si esta carrera es la seleccionada para el estudiante
                        $selected = ($career['id_career'] == $student['id_career_student']) ? 'selected' : ''; 
                        ?>
                        <option value="<?php echo $career['id_career']; ?>" <?php echo $selected; ?>>
                            <?php echo $career['name_career']; ?>
                        </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Actualizar Estudiante</button>
        <a href="../Views/index_student.php" class="btn btn-danger mt-4">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
