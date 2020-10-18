<?php 

require("../conexion.php");

$conn = new mysqli($servidor, $usuario, $pwd, $bd);

	if($conn->connect_error){
		die("Error al momento de conectar al servidor : " . $conn->connect_error);
	}

	$clave = mysqli_real_escape_string($conn, $_POST['clave']);
    $nom = mysqli_real_escape_string($conn, $_POST['nombre']);
    $dias = mysqli_real_escape_string($conn, $_POST['dias_entrega']);


    $check = mysqli_query($conn,"SELECT * FROM proveedores WHERE clave = '$clave'");

    $numerofila = mysqli_num_rows($check);

    if($numerofila == 0){

    $sql = "INSERT INTO proveedores (clave, nombre, dias_entrega) VALUES ('$clave', '$nom', '$dias')";

        if(mysqli_query($conn, $sql)){
           header("Location: proveedores.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    }   else{
            
            echo "La clave ya existe";

    }

	

    $conn->close();
 ?>