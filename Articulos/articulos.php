<?php 
include("header.php");
 ?>

<?php
if(isset($_SESSION['userId'])){
    echo '<div class="alert alert-dark" role="alert">
	<h4 class="alert-dark">Articulos</h4> 
   </div>
   
   
   
   
   <a href="registrar.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Registrar Artículo</a>
   
   
   </br>
   </br>
   <table class="table table-dark"> 
	   <tr>
		 <th scope="col">Codigo</th>
		 <th scope="col">Descripción</th>
		 <th scope="col">Precio</th>
		 <th scope="col">Cantidad</th>
		 <th></th>
		 <th></th>
	   </tr>  ';
	   require("../conexion.php");

	   $conn = new mysqli($servidor, $usuario, $pwd, $bd);
   
	   if($conn->connect_error){
		   die("Error al momento de conectar al servidor : " . $conn->connect_error);
	   }
   
	   $sql= "SELECT * from articulos";
	   $result = $conn->query($sql);
   
	   if($result->num_rows > 0){
		   while($row = $result->fetch_object()){
			   echo"<tr>";
			   echo"<td>" . $row->codigo . "</td>";
			   echo"<td>" . $row->descripcion . "</td>";
			   echo"<td>" . $row->precio . "</td>";
			   echo"<td>" . $row->cantidad . "</td>";
			   echo "<td><a href='actualizar.php?codigo=$row->codigo'>Editar</a></td>";
			   echo "<td><a href='eliminar.php?codigo=$row->codigo'>Eliminar</a></td>";
			   echo "</tr>";
		   }
		   $result->free();
	   }
	   $conn->close();
	   echo '</table>';
}
else{
    Header("Location: ../index.php?error=NoHasIniciadoSesion");
}

?>


<?php 
include("footer.php");
 ?>