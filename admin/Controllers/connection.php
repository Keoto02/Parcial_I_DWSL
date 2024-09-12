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
    
    CREATE TABLE Users(
		id INT PRIMARY KEY auto_increment,
		userOwner VARCHAR(100),
		userName VARCHAR(100),
		userPwd VARCHAR(100)
	);

    INSERT INTO careers VALUES (null, "Licenciatura en Informatica", "Carrera de Licenciatura en informatica");
    INSERT INTO careers VALUES (null, "Ingeniería en desarrollo de software", "Carrera de Ingeniería en desarrollo de software");
    INSERT INTO careers VALUES (null, "Licenciatura en psicología", "Carrera de Licenciatura en psicología");

    INSERT INTO students VALUES (null, "Williams", "Rodriguez", "u20210444", 1);
	INSERT INTO students VALUES (null, "Carlos", "Guerrero", "u20210475", 1);
    
	INSERT INTO Users VALUES(NULL, 'Carlos',  'u20210475', '202cb962ac59075b964b07152d234b70');
	INSERT INTO Users VALUES(NULL, 'Williams',  'u20210444', 'caf1a3dfb505ffed0d024130f58c5cfa');
    */
?>