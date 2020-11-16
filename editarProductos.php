<?php 

include("BaseDatos.php");


$transaccion=new BaseDatos();



if(isset($_POST["botonEditar"])){


    
    $id=$_GET["id"];
    $marca=$_POST['marcaEditar'];
    $precio=$_POST['precioEditar'];
    $descripcion=$_POST['descEditar'];

    
    $consultaSQL="UPDATE productos SET marcaP='$marca',precioP='$precio',Descripcion='$descripcion' WHERE IdProductos='$id'";


    
    $transaccion->editarProductos($consultaSQL);
    header("location:productos.php");

}
