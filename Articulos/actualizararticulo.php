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

    $sql = "UPDATE articulos SET descripcion='$descripcion', precio='$precio', cantidad='$cantidad' WHERE codigo='$codigo'";

    if(mysqli_query($conn, $sql)){
       header("Location: articulos.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    
    $conn->close();

   
 ?>