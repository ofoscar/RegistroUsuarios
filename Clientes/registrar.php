<?php 
include("header.php");
 ?>

<form method="post" action="registrarcliente.php">

<div class="form-group">
    <label for="exampleInputEmail1">Clave</label>
    <input type="number" class="form-control" id="clavee" name="clave" placeholder="Clave de Cliente">    
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

<?php 
include("footer.php");
 ?>