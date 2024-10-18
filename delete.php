<?php
include './conexion.php';

$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id=$id";

if ($conexion->query($sql) === TRUE) {
    $conexion->close();
header("Location: index.php");
        exit();} else {
    echo "<div class='alert alert-danger'>Error eliminando registro: " . $conexion->error . "</div>";
}


?>