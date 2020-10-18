<?php 

require("../conexion.php");

$conn = new mysqli($servidor, $usuario, $pwd, $bd);

	if($conn->connect_error){
		die("Error al momento de conectar al servidor : " . $conn->connect_error);
	}

	$codigo = mysqli_real_escape_string($conn, $_POST['codigo']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $precio = mysqli_real_escape_string($conn, $_POST['precio']);
    $cantidad = mysqli_real_escape_string($conn, $_POST['cantidad']);


    $check = mysqli_query($conn,"SELECT * FROM articulos WHERE codigo = '$codigo'");

    $numerofila = mysqli_num_rows($check);

    if($numerofila == 0){

    $sql = "INSERT INTO articulos (codigo, descripcion, precio, cantidad) VALUES ('$codigo', '$descripcion','$precio', '$cantidad')";

        if(mysqli_query($conn, $sql)){
           header("Location: articulos.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    }   else{
            
            echo "El codigo de articulo ya existe";

    }

	

    $conn->close();
 ?>