<?php 

require("../conexion.php");

$conn = new mysqli($servidor, $usuario, $pwd, $bd);

    if($conn->connect_error){
        die("Error al momento de conectar al servidor : " . $conn->connect_error);
    }

    $clave = mysqli_real_escape_string($conn, $_POST['clave']);
    $nom = mysqli_real_escape_string($conn, $_POST['nombre']);
    $fecha = mysqli_real_escape_string($conn, $_POST['fecha_ingreso']);
    $puesto = mysqli_real_escape_string($conn, $_POST['puesto']);
    $sueldo = mysqli_real_escape_string($conn, $_POST['sueldo']);

    $sql = "UPDATE empleados SET nombre='$nom', fecha_ingreso='$fecha', puesto = '$puesto', sueldo = 'sueldo' WHERE clave='$clave'";

    if(mysqli_query($conn, $sql)){
       header("Location: empleados.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    
    $conn->close();

   
 ?>