<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tienda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="tienda.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="producto.php">Productos Guardados</a>
      </li>
      
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    </div>
<center>
         <img src="imag/ropa1.jpg" width="80%" height="300" title="Tienda Virtual" hspace="100" >

    </center>
    
    <center>
    <h1>PRODUCTOS GUARDADOS</h1>
    </center>

    <?php  
    
        include("BaseDatos.php");

        
        $transaccion=new BaseDatos();

        
        $consultaSQL="SELECT * FROM productos WHERE 1";

        
        $productos=$transaccion->consultarProductos($consultaSQL);

    
    ?>

    <main>
    
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">  

                <?php foreach($productos as $productos):?>

                    <div class="col mb-4">
                        <div class="card">
                            <img src="<?php echo($productos["Foto"])?>" class="card-img-top" alt="FOTO">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo($productos["nProducto"]) ?></h3>
                                <h3 class="card-title"><?php echo($productos["marcaP"]) ?></h3>
                                <h3 class="card-title"><?php echo($productos["precioP"]) ?></h3>
                                <p class="card-text"><?php echo($productos["Descripcion"]) ?></p>
                                <a href="eliminarProductos.php?id=<?php echo($productos['IdProductos'])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($productos["IdProductos"])?>">
                                   Editar
                                </button>

                                </div>

                            </div> 

                      
                        
                        <div class="modal fade" id="editar<?php echo($productos["IdProductos"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edición de productos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                             </div>
                                            <div class="modal-body">
                                        <form action="editarProductos.php?id=<?php echo($productos["IdProductos"])?>" method="POST">
                                            <div class="form-group">
                                                <label>Marca:</label>
                                                <input type="text" class="form-control" name="marcaEditar" value="<?php echo($productos["marcaP"])?>">
                                            </div>
                                            <label>Precio:</label>
                                                <input type="text" class="form-control" name="precioEditar" value="<?php echo($productos["precioP"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descEditar"><?php echo($productos["Descripcion"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach?>


            </div>
        
        </div>
    
    
    </main>
    <footer class= "container" >
            <ul>
                
                <br>Medellin Antioquia
                <br>Calle 45-15
                <br>+57 3217634631
                <br>tiendavirtuala@gmail.com
            </ul>
        </footer>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>