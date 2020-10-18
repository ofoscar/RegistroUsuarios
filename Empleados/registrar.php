<?php 
include("header.php");
 ?>

<form method="post" action="registrarempleado.php">

<div class="form-group">
    <label for="exampleInputEmail1">Clave</label>
    <input type="number" class="form-control" id="clavee" name="clave" placeholder="Clave de Empleado">    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de Empleado">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Fecha de Ingreso</label>
    <input type="date" class="form-control" name="fecha_ingreso" placeholder="Fecha de Ingreso">    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Puesto</label>
    <input type="text" class="form-control" id="puesto" name="puesto" aria-describedby="emailHelp" placeholder="Ingrese Puesto">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Sueldo</label>
    <input type="numeric" class="form-control" id="sueldo" name="sueldo" placeholder="Sueldo">    
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
include("footer.php");
 ?>