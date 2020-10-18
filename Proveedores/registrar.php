<?php 
include("header.php");
 ?>

<form method="post" action="registrarproveedor.php">

<div class="form-group">
    <label for="exampleInputEmail1">Clave</label>
    <input type="number" class="form-control" id="clavee" name="clave" placeholder="Clave de Empleado">    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de Empleado">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Dias de Entrega</label>
    <input type="text" class="form-control" name="dias_entrega" placeholder="Fecha de Ingreso">    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
include("footer.php");
 ?>