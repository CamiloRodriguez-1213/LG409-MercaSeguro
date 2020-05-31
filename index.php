<?php
include('includes/db.php');
include('includes/verify_install.php');
include('login_logout/login.php');
if (!$_GET) {
  header('Location:index.php?pagina=1');
}


?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/estilo_inicio.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <title>MercaSeguro</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top row-12 sm-12 md-4">
  
  <h5><a class="navbar-brand ml-5" href="index.php">MercaSeguro </a></h5>
    
    
    <ul class="navbar-nav ml-4 mr-2">
    
    
    <form action="index.php?pagina=1" class="form-inline my-2 my-lg-0" method="GET">
          <div class="row">
            <div class="input-group">
                <input class="form-control" type="text" name="busqueda" id="busqueda"  placeholder="Busca tus productos">
                <input class="form-control" hidden type="text" name="pagina" id="pagina" value="1"  placeholder="Busca tus productos">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" >
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
          </div>
            
          </form>
          
    </ul>
  <?php 
  
  

  include 'accesorios/navbar.php' ?>
  </nav>
</head>
<body>
  

 
  <div class="container">
    <h1 class="my-5">Paginacion</h1>
    <div class="row justify-content-around">
      <?php
      if (isset($_GET['busqueda'])) {
        include 'procedimientos_externos/paginacion_buscar.php';
   
   while ($mostrar = mysqli_fetch_array($result_paginas)) : ?>

     <div class="contenedor  sm-12 md-4">
       <figure>

         <div class="card btn-light mr-2" style="width: 230px; height: 310px; ">
           <div class="color">
             <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="108rem" class="card-img-top" alt="OO">
             <br><br>
             <small>39% descuento</small>
             <h3 class="card-text-success">$ <?php echo $mostrar['precio']; ?> </h3>
             <p style="height: 50px; "><small> <?php echo $mostrar['nombre_producto']; ?> </small> </p>
             <div class="capa">
             
             </div>
           </div>
         </div>
       </figure>
     </div>
   <?php
   endwhile;
   include 'procedimientos_externos/barra_paginar_buscar.php';
  
      }
      /* Cuando no se hace una busqueda */
      if (!isset($_GET['busqueda'])&&(isset($_GET['pagina']))) {
        include 'accesorios/carrusel.php';
  
        include 'procedimientos_externos/paginacion.php';
        while ($mostrar = mysqli_fetch_array($result_paginas)) : ?>

          <div class="contenedor  sm-12 md-4">
            <figure>
     
              <div class="card btn-light mr-2" style="width: 230px; height: 310px; ">
                <div class="color">
                  <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="108rem" class="card-img-top" alt="OO">
                  <br><br>
                  <small>39% descuento</small>
                  <h3 class="card-text-success">$ <?php echo $mostrar['precio']; ?> </h3>
                  <p style="height: 50px; "><small> <?php echo $mostrar['nombre_producto']; ?> </small> </p>
                  <div class="capa">
                  
                  </div>
                </div>
              </div>
            </figure>
          </div>
        <?php
        endwhile;
        include 'procedimientos_externos/barra_paginar.php';
      ?>
      
      <?php
    }
      ?>
    </div>
  </div>
  <br><br>

  

  <div style="float: right">
    <p>© <?php echo date("Y"); ?> <a href="" target="_blank">MercaSeguro</a> Todos los derechos reservados | Diseñado por <a href="" target="_blank">MercaSeguro</a> </p>
  </div>
</body>

</html>