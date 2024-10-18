<?php

include './conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];

  $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
  
  if ($conexion->query($sql) === TRUE) {
      
      echo "<div class='alert alert-danger'>Registro Cargado Exitosamente </div>";

      header("Location: index.php");
      exit();     
  } else {
      echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conexion->error . "</div>";
  }

  $conexion->close();
}





?>












