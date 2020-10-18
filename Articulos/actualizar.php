<?php 
include("header.php");
 ?>
<?php 
$codigo = $_GET['codigo'];
$nombre = "";
$dias = "";

require("../conexion.php");

  $conn = new mysqli($servidor, $usuario, $pwd, $bd);

  if($conn->connect_error){
    die("Error al momento de conectar al servidor : " . $conn->connect_error);
  }

  $sql= "SELECT * from articulos WHERE codigo = '$codigo'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_object()){
      $descripcion = $row->descripcion;
      $precio = $row->precio;
      $cantidad = $row->cantidad;
    }
  }
 ?>
<form method="post" action="actualizararticulo.php">

<div class="form-group">
    <label for="exampleInputEmail1">Codigo</label>
    <input type="number" class="form-control" id="clavee" name="codigo" placeholder="Codigo de Articulo" value="<?=$codigo?>">    
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input type="text" class="form-control" id="nombre" name="descripcion" placeholder="Descripción de Articulo">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Precio</label>
    <input type="text" class="form-control" id="domicilio" name="precio" placeholder="Precio de Articulo">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Cantidad</label>
    <input type="number" class="form-control" id="domicilio" name="cantidad" placeholder="Cantidad de Articulo">    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

