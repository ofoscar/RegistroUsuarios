<?php 

require("../conexion.php");

$conn = new mysqli($servidor, $usuario, $pwd, $bd);

	if($conn->connect_error){
		die("Error al momento de conectar al servidor : " . $conn->connect_error);
	}

	$clave = mysqli_real_escape_string($conn, $_POST['clave']);
    $nom = mysqli_real_escape_string($conn, $_POST['nombre']);
    $domicilio = mysqli_real_escape_string($conn, $_POST['domicilio']);
    $correo = mysqli_real_escape_string($conn, $_POST['correo']);
    $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);



	$sql = "INSERT INTO clientes (clave, nombre, domicilio, correo, telefono) VALUES ('$clave', '$nom', '$domicilio', '$correo', '$telefono')";

	if(mysqli_query($conn, $sql)){
       header("Location: clientes.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    $conn->close();
 ?>