<?php
    /*
    CREATE DATABASE UniversityDB;
    USE UniversityDB;

    CREATE TABLE Careers(
        id_career INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name_career VARCHAR(50),
        description_career VARCHAR(255)
    );

    CREATE TABLE Students(
        id_student INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name_student VARCHAR(50),
        last_name_student VARCHAR(50),
        code_student VARCHAR(10),
        id_career_student INT,
        FOREIGN KEY (id_career_student) REFERENCES Careers(id_career) ON DELETE SET NULL
    );


    INSERT INTO careers VALUES (null, "Licenciatura en Informatica", "Carrera de Licenciatura en informatica");

    INSERT INTO students VALUES (null, "Williams", "Rodriguez", "u20210444", 1)
    */

    //configuraciones de la base de datos
    $db_host = 'localhost';
    $db_name = 'UniversityDB';
    $db_username = 'root';
    $db_password = '';
    
    // Conexion
    try {
        $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error al conectar a la base de datos: ".$e->getMessage();
    }
?>