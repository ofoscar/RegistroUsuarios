<?php
include("header.php");
?>

<?php
if(isset($_SESSION['userId'])){
    echo '
    <h1>Bienvenidos al proyecto del grupo 3-3</h1>

    <a href="Clientes/clientes.php"><h2> CLIENTES </h2></a>
    <a href="Empleados/empleados.php"><h2> EMPLEADOS </h2></a>
    <a href="Proveedores/proveedores.php"><h2> PROVEEDORES </h2></a>
    <a href="Articulos/articulos.php"><h2> ARTICULOS </h2></a>';
}
else{
    Header("Location: index.php?error=NoHasIniciadoSesion");
}

?>



<?php 
include("footer.php");
 ?>