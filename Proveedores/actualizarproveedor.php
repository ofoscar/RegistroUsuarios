<?php 

require("../conexion.php");

$conn = new mysqli($servidor, $usuario, $pwd, $bd);

    if($conn->connect_error){
        die("Error al momento de conectar al servidor : " . $conn->connect_error);
    }

    $clave = mysqli_real_escape_string($conn, $_POST['clave']);
    $nom = mysqli_real_escape_string($conn, $_POST['nombre']);
    $dias = mysqli_real_escape_string($conn, $_POST['dias_entrega']);

    $sql = "UPDATE proveedores SET nombre='$nom', dias_entrega='$dias' WHERE clave='$clave'";

    if(mysqli_query($conn, $sql)){
       header("Location: proveedores.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    
    $conn->close();

   
 ?>