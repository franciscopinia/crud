<?php
include './conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php");
        exit();    } else {
        echo "<div class='alert alert-danger'>Error actualizando registro: " . $conexion->error . "</div>";
    }

    $conexion->close();
}
?>