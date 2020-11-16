<?php

class BaseDatos{

public $usuarioBD="root";
public $passwordBD= "";


public function __Construct(){}

public function conectarBD(){

    try{

    $datosBD="mysql:host=localhost;dbname=tiendavirtual";

    $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
    return($conexionBD);

    }catch(PDOException $error){
        echo($error-> getMessage());
    }

}
public function agregarProductos($consultaSQL){
    

    $conexionBD=$this->conectarBD();

   

    $insertarProductos=$conexionBD->prepare($consultaSQL);

   
   $resultado=$insertarProductos->execute();
    if($resultado){
        echo("Producto agregado");
    }else{
        echo("error");
    }
}
public function consultarProductos($consultaSQL){

    
    $conexionBD=$this->conectarBD();

    
    $consultarProductos=$conexionBD->prepare($consultaSQL);

    
    $consultarProductos->setFetchMode(PDO::FETCH_ASSOC);

    
    $consultarProductos->execute();

    return($consultarProductos->fetchAll());



}

public function eliminarProductos($consultaSQL){

    
    
    $conexionBD=$this->conectarBD();

  
    $eliminarProductos=$conexionBD->prepare($consultaSQL);

    
    $resultado= $eliminarProductos->execute();

   
    if($resultado){
        echo("producto eliminado");
    }else{
        echo("error");
    }

}

public function editarProductos($consultaSQL){

    
    $conexionBD=$this->conectarBD();

    
    $editarProductos=$conexionBD->prepare($consultaSQL);

    
    $resultado= $editarProductos->execute();

    
    if($resultado){
        echo("prducto Editado");
    }else{
        echo("error");
    }

}





}





?>
