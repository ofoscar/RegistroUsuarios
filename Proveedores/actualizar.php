<?php 
include("header.php");
 ?>
<?php 
$clave = $_GET['clave'];
$nombre = "";
$dias = "";

require("../conexion.php");

  $conn = new mysqli($servidor, $usuario, $pwd, $bd);

  if($conn->connect_error){
    die("Error al momento de conectar al servidor : " . $conn->connect_error);
  }

  $sql= "SELECT * from proveedores WHERE clave = '$clave'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_object()){
      $nombre = $row->nombre;
      $dias = $row->dias_entrega;
    }
  }
 ?>
<form method="post" action="actualizarproveedor.php">

<div class="form-group">
    <label for="exampleInputEmail1">Clave</label>
    <input type="text" class="form-control" id="clavee" name="clave" placeholder="Clave de Empleado" value="<?=$clave?>">    
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de Empleado">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Dias de Entrega (Lunes,Martes,...)</label>
    <input type="text" class="form-control" id="domicilio" name="dias_entrega" placeholder="Fecha de Ingreso">    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

