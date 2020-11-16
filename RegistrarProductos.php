
<?php
include('BaseDatos.php');

if(isset($_POST['botonEnvio'])){

    $producto=$_POST['nProducto'];
    $marca=$_POST['marcaP'];
    $precio=$_POST['precioP'];
    $descripcion=$_POST['Descripcion'];
    $foto=$_POST['Foto'];
}
$transaccion=new BaseDatos();


$consultaSQL="INSERT INTO productos(nProducto, marcaP, precioP, Descripcion, Foto) VALUES ('$producto','$marca','$precio','$descripcion','$foto')";


$transaccion->agregarProductos($consultaSQL);

header("location:tienda.php");



?>