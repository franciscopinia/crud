<?php
include './conexion.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
     <div class="container mt-5">
    
      <h2>Crear Nuevos Registro</h2>  
      <form action="create.php" method="post">
    
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" class="form-control"  id="nombre" name="nombre" placeholder="ingrese su nombre por favor" required>
        </div>
        
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido:</label>
          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="ingrese su apellido por favor" required>
        </div>
        

        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="ingrese su email por favor" required>
        </div>

        <div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>  
    
      </form>
     </div>
</body>

</html>