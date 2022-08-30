<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fabricantes</title>
  </head>
  <body>
    <br>

<!-- inicio de formulario --> 
  <form action="action/insertfabricante.php" method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Fabricante</label>
    <input type="text" name="inputNombre"  class="form-control">
  </div>
  <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
</form>
    <div class="container">
    
      <!-- final de formulario--> 
      <br>

   <!-- inicio de la tabla de fabricantes--> 
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Fabricante</th>
      
    </tr>
  </thead>
  <tbody>


  <?php
  //include es importar el archivo de conexion

  include('connection/connection.php');

  //variable para listar todas las tablas de fabricantes
  $consulta = "SELECT*FROM fabricante";
  // query de conexion y query de listado
  $resultado = mysqli_query($connection,$consulta);
  //mientras haya algo dentro de tabla,seguira listando

  while($fila = mysqli_fetch_array($resultado)){

?>
    <tr>
    <th scope="row"><?php echo $fila["codigo"] ?></th>
    <td><?php echo $fila["nombre"] ?></td>
    
  </tr>

 <?php } ?>
    
  </tbody>
</table>
<!-- final de la tabla de fabricantes--> 
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
    </div>
  