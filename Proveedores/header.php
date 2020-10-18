<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php"><img style=" border= 0 ">Proyecto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Clientes/clientes.php">Clientes</a>        
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="../Empleados/empleados.php">Empleados</a>        
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="../Proveedores/proveedores.php">Proveedores</a>        
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="../Articulos/articulos.php">Articulos</a>        
      </li>    
      <form action="../includes/logout.inc.php" method="post">
      <li class="nav-item">
        <button class="btn btn-danger">Cerrar Sesion</button>     
      </li>    
      </form>
    </ul>
    
  </div>
</nav>



</body>
</html>