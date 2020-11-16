<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda-Virtual</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
        <a class="nav-link" href="tienda.php">Inico <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos Guardados</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
    </div>
    <center>
         <img src="imag/ropa2.jpg" width="80%" height="300" title="Tienda Virtual" hspace="100" >

    </center>
    
    <center>
    <h1>TIENDA MEDELLIN</h1>
    </center>
    
    <div>
        <div class="container">
        <form action="RegistrarProductos.php" method="POST">
  <div class="form-row">
        <div class="form-group col-md-6">
          <label for="producto">Producto</label>
      <input type="prodcuto" class="form-control" id="inputEmail4" placeholder="NombreDel producto" name="producto">
    </div>
    <div class="form-group col-md-6">
          <label for="inputPassword4">Marca</label>
          <input type="Marca" class="form-control" id="inputPassword4" placeholder="MarcaDelProducto" name="marca">
      </div>
  </div>
  <div class="form-group col-md-4">
            <label for="inputAddress">Precio</label>
            <input type="number" class="form-control" id="inputAddress" placeholder="PrecioDelProducto" name="precio">
     </div>
  <div class="form-group">
            <label for="inputAddress2">Descripción</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Descripción del producto" name="descripcion">
   </div>
                <div class="form-group">
                                  
                   
                        <label for="inputAddress2">Foto:</label>
                        <input type="text" class="form-control" placeholder="URL FOTOGRAFIA" name="foto">
                    
                </div>
  <button type="submit" class="btn btn-primary" name="botonEnvio">Registrar Producto</button>
  
</form>
        </div>
     </div>

     <footer class= "container" >
            <ul>
                
                <br>Medellin Antioquia
                <br>Calle 45-15
                <br>+57 3217634631
                <br>tiendavirtuala@gmail.com
            </ul>
        </footer>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>