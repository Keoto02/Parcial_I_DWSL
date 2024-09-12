<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Universidad de Oriente
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index_student.php">Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index_career.php">Carreras</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Estudiantes</h1>
        <!-- Botón para crear nuevo estudiante -->
        <a href="./create_student.php" class="btn btn-success mb-3">
            Crear Nuevo Estudiante
        </a>

        <!-- Campo de búsqueda -->
        <div class="input-group mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar por nombre de estudiante">
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Código</th>
                    <th>Carrera</th>
                    <th>Acciones</th> <!-- Nueva columna para acciones -->
                </tr>
            </thead>
            <tbody id="studentList">
                <?php
                // Incluir archivo de controlador para obtener la lista de estudiantes
                include '../Controllers/index_student_code.php';

                // Mostrar la lista completa de estudiantes inicialmente
                foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo $student['id_student']; ?></td>
                        <td><?php echo $student['name_student']; ?></td>
                        <td><?php echo $student['last_name_student']; ?></td>
                        <td><?php echo $student['code_student']; ?></td>
                        <td><?php echo $student['name_career']; ?></td>
                        <td>
                            <!-- Botones para editar y eliminar cada estudiante -->
                            <a href="../Controllers/GetByIdStudent.php?action=edit&id=<?php echo $student['id_student']; ?>" class="btn btn-primary btn-sm mr-2">
                                Editar
                            </a>
                            <a href="../Controllers/GetByIdStudent.php?action=delete&id=<?php echo $student['id_student']; ?>" class="btn btn-danger btn-sm">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../Controllers/export_students_to_csv.php" class="btn btn-primary">Exportar a Excel</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html> 