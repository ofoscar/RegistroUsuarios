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

  $sql= "SELECT * from empleados WHERE clave = '$clave'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_object()){
      $nombre = $row->nombre;
      $fecha = $row->fecha_ingreso;
      $puesto = $row->puesto;
      $sueldo = $row->sueldo;
    }
  }
 ?>
<form method="post" action="actualizarempleado.php">

<div class="form-group">
    <label for="exampleInputEmail1">Clave</label>
    <input type="text" class="form-control" id="clavee" name="clave" placeholder="Clave de Empleado" value="<?=$clave?>">    
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de Empleado">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Fecha de Ingreso</label>
    <input type="date" class="form-control" id="domicilio" name="fecha" placeholder="Fecha de Ingreso">    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Puesto</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="puesto" aria-describedby="emailHelp" placeholder="Puesto de Empleado">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Sueldo</label>
    <input type="numeric" class="form-control" id="telefono" name="sueldo" placeholder="Sueldo de Empleado">    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

