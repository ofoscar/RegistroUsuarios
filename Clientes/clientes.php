<?php 
include("header.php");
 ?>

<?php
if(isset($_SESSION['userId'])){
    echo '
    
 <div class="alert alert-dark" role="alert">
 <h4 class="alert-dark">Clientes</h4> 
</div>




<a href="registrar.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Registrar Cliente</a>

</br>
</br>
<table class="table table-dark"> 
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th> 
      <th></th>
      <th></th>
	</tr>  
	';
	require("../conexion.php");

	$conn = new mysqli($servidor, $usuario, $pwd, $bd);

	if($conn->connect_error){
		die("Error al momento de conectar al servidor : " . $conn->connect_error);
	}

	$sql= "SELECT * from clientes";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_object()){
			echo"<tr>";
			echo"<td>" . $row->clave . "</td>";
			echo"<td>" . $row->nombre . "</td>";
			echo"<td>" . $row->domicilio . "</td>";
			echo"<td>" . $row->correo . "</td>";
			echo"<td>" . $row->telefono . "</td>";
			echo "<td><a href='actualizar.php?clave=$row->clave'>Editar</a></td>";
			echo "<td><a href='eliminar.php?clave=$row->clave'>Eliminar</a></td>";
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