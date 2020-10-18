<?php 
include("header.php");
 ?>

<form method="post" action="registrararticulo.php">

<div class="form-group">
    <label for="exampleInputEmail1">Codigo</label>
    <input type="number" class="form-control" id="clavee" name="codigo" placeholder="Codigo de Articulo">    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input type="text" class="form-control" id="nombre" name="descripcion" placeholder="Descripcion de Articulo">    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Precio</label>
    <input type="number" class="form-control" id="clavee" name="precio" placeholder="Precio de Articulo">    
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Cantidad</label>
    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad">    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
include("footer.php");
 ?>