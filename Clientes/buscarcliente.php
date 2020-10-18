<?php 
	include("header.php");
 ?>

<table class="table table-bordered table-hover table-dark" style="margin-top: 20px"> 
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th> 
    </tr>  
  
<?php 
	require("../conexion.php");

	$conn = new mysqli($servidor, $usuario, $pwd, $bd);

	if($conn->connect_error){
		die("Error al momento de conectar al servidor : " . $conn->connect_error);
	}

	$clave = mysqli_real_escape_string($conn, $_POST['buscar']);    

	$sql= "SELECT * from clientes WHERE clave = '$clave'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_object()){

			

			echo"<tr>";
			echo"<td>" . $row->clave . "</td>";
			echo"<td>" . $row->nombre . "</td>";
			echo"<td>" . $row->domicilio . "</td>";
			echo"<td>" . $row->correo . "</td>";
			echo"<td>" . $row->telefono . "</td>";
			echo "<td></td>";
			echo "</tr>";

 ?>
</table>
 <?php 
			echo "<form method='post' action='actualizarcliente.php' style='margin-left: 20px; margin-right: 500px'>";

			
			echo "<div class='form-group'>
    <label for='clavee'>Clave</label>
    <input type='text' class='form-control' id='clavee' name='clave' placeholder='$clave' value='$clave' readonly='readonly'>    
  </div>";
  			
  			echo "<div class='form-group'>
    <label for='exampleInputEmail1'>Nombre</label>
    <input type='text' class='form-control' id='nombre' name='nombre' placeholder='Nombre de Cliente'>    
  </div>";
  			echo "<div class='form-group'>
    <label for='exampleInputEmail1'>Domicilio</label>
    <input type='text' class='form-control' id='domicilio' name='domicilio' placeholder='Domicilio'>    
  </div>";
  			echo "<div class='form-group'>
    <label for='exampleInputEmail1'>Correo</label>
    <input type='text' class='form-control' id='exampleInputEmail1' name='correo' aria-describedby='emailHelp' placeholder='Ingrese Correo'>
    <small id='emailHelp' class='form-text text-muted'>No compartiremos este correo</small>
  </div>";
  			echo "<div class='form-group'>
    <label for='exampleInputEmail1'>Telefono</label>
    <input type='numeric' class='form-control' id='telefono' name='telefono' placeholder='Telefono 10 digitos'>    
  </div>";

			echo "<button type='submit' class='btn btn-primary' style='margin-bottom: 20px'>Actualizar Cliente</button>";
			echo "</form>";
		}
		$result->free();
	}
	$conn->close();
 ?>
 	<form method="post">
	<button type='submit' name='borrarc' id='borrarc' class='btn btn-primary' style='margin-bottom: 20px'>Borrar Cliente</button>
	</form>
<?php 

$id = $clave;

function Borrar($id){
 $sqlB= "DELETE * from clientes WHERE clave = '$clave'";

if(mysqli_query($conn, $sqlB)){
       header("Location: clientes.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

if(array_key_exists('borrarc', $_POST)){
	Borrar();
}
?>


	


<?php 
include("footer.php");
 ?>