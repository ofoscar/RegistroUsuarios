<?php 

require("../conexion.php");

$conn = new mysqli($servidor, $usuario, $pwd, $bd);

    if($conn->connect_error){
        die("Error al momento de conectar al servidor : " . $conn->connect_error);
    }

    $codigo = $_GET['codigo']; 

    $sql = "DELETE FROM articulos WHERE codigo ='$codigo'";

    if(mysqli_query($conn, $sql)){
       header("Location: articulos.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    
    $conn->close();

   
 ?>