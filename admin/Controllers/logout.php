<?php
session_start();
if ($_SESSION["user"]=="") {
    header("Location: ../Views/index_student.php");
}
session_destroy();
header("Location: ../../index.php");
?>