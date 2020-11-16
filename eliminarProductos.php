  
<?php 

include("BaseDatos.php");


$idEliminar=($_GET["id"]);


$transaccion= new BaseDatos();

$consultaSQL="DELETE FROM productos WHERE IdProductos='$idEliminar'";

$transaccion->eliminarProductos($consultaSQL);
header("location:productos.php");





?>