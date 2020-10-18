<?php 
include("header.php");
 ?>
<?php 
$clave = $_GET['clave'];
$nombre = "";
$domicilio = "";
$telefono = "";
$correo = "";

require("../conexion.php");

  $conn = new mysqli($servidor, $usuario, $pwd, $bd);

  if($conn->connect_error){
    die("Error al momento de conectar al servidor : " . $conn->connect_error);
  }

  $sql= "SELECT * from clientes WHERE clave = '$clave'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_object()){
      $nombre = $row->nombre;
      $domicilio = $row->domicilio;
      $telefono = $row->telefono;
      $correo = $row->correo;
    }
  }
 ?>
<form method="post" action="actualizarcliente.php">

<div class="form-group">
    <label for="exampleInputEmail1">Clave</label>
    <input type="text" class="form-control" id="clavee" name="clave" placeholder="Clave de Cliente" value="<?=$clave?>">    
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de Cliente">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Domicilio</label>
    <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio">    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="correo" aria-describedby="emailHelp" placeholder="Ingrese Correo">
    <small id="emailHelp" class="form-text text-muted">No compartiremos este correo</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="numeric" class="form-control" id="telefono" name="telefono" placeholder="Telefono 10 digitos">    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

