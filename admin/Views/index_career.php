<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carreras</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
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
        <h1 class="mb-4">Lista de Carreras</h1>
        <!-- Botón para crear nueva carrera -->
        <a href="./create_career.php" class="btn btn-success mb-3" >
            Crear Nueva Carrera
        </a>
        <div class="input-group mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar por nombre de carrera">
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="careerList">
                <?php
                include '../Controllers/index_code.php';
                foreach ($careers as $career): ?>
                    <tr>
                        <td><?php echo $career['id_career']; ?></td>
                        <td><?php echo $career['name_career']; ?></td>
                        <td><?php echo $career['description_career']; ?></td>
                        <td>
                            <!-- Botones de editar y eliminar -->
                            <a href="../Controllers/GetById.php?action=edit&id=<?php echo $career['id_career']; ?>" class="btn btn-primary btn-sm mr-2">
                                Editar
                            </a>
                            <a href="../Controllers/GetById.php?action=delete&id=<?php echo $career['id_career']; ?>" class="btn btn-danger btn-sm">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../Controllers/export_careers_to_csv.php" class="btn btn-primary">Exportar a Excel</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html> 