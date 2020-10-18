<?php 

require("../conexion.php");

$conn = new mysqli($servidor, $usuario, $pwd, $bd);

    if($conn->connect_error){
        die("Error al momento de conectar al servidor : " . $conn->connect_error);
    }

    $clave = $_GET['clave']; 

    $sql = "DELETE FROM empleados WHERE clave ='$clave'";

    if(mysqli_query($conn, $sql)){
       header("Location: empleados.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    
    $conn->close();

   
 ?>