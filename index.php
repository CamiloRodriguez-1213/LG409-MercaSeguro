<?php
include('includes/db.php');
include('includes/verify_install.php');
include('login_logout/login.php');
if (!$_GET) {
  header('Location:index.php?pagina=1');
}

if ($_GET['pagina'] == null || $_GET['pagina'] <= 0) {
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
                <input class="form-control" type="text" name="busqueda" id="busqueda" value="<?php if (isset($_GET['busqueda'])) { echo $_REQUEST['busqueda']; }?>"  placeholder="Busca tus productos">
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
  
  <?php
  
  if (!isset($_GET['busqueda'])) { include 'accesorios/carrusel.php'; }
  ?>
  <div class="container">
  <h3 class="mt-5 mb-2">Aprovecha ahora y has tus compras ya </h3>

  
    <div class="row justify-content-around">
      <?php
      if (isset($_GET['busqueda'])) {
        include 'procedimientos_externos/paginacion_buscar_index.php';
        if ($result_consulta!=0) {
          # code...
        
   while ($mostrar = mysqli_fetch_array($result_paginas)) : ?>
      <div class="contenedor  sm-12 md-4">
        
            <figure>
            <form action="ventas/ver_productos.php" method="GET">
            
            <button class="btn btn-flex" type="submit">
              <div class="card btn-light mr-2" style="width: 230px; height: 310px; ">
                <div class="color">
                  <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="108rem" class="card-img-top" alt="OO">
                  <br><br>
                  <small>39% descuento</small>
                  <h3 class="card-text-success">$ <?php echo $mostrar['precio']; ?> </h3>
                  <p style="height: 50px; "><small> <?php echo $mostrar['nombre_producto']; ?> </small> </p>
                  <input type="text" hidden id="ver_producto" name="ver_producto" value="<?php echo $mostrar['id'] ?>">
                  <input type="text" hidden id="nombre" name="nombre" value="<?php echo $mostrar['nombre_producto'] ?>">

                </div>
              </div>
            </button>
            </form>
            </figure>
       </figure>
       </div>
   <?php
   endwhile;
  }else {

    ?>
    
    <?php
  }
        
      }
      /* Cuando no se hace una busqueda */
      elseif (!isset($_GET['busqueda'])&&(isset($_GET['pagina']))) {
        include 'procedimientos_externos/paginacion_index.php';
        while ($mostrar = mysqli_fetch_array($result_paginas)) : ?>

<div class="contenedor  sm-12 md-4">
        
            <figure>
            <form action="ventas/ver_productos.php" method="GET">
            
            <button class="btn btn-flex" type="submit">
              <div class="card btn-light mr-2" style="width: 230px; height: 310px; ">
                <div class="color">
                  <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="108rem" class="card-img-top" alt="OO">
                  <br><br>
                  <small>39% descuento</small>
                  <h3 class="card-text-success">$ <?php echo $mostrar['precio']; ?> </h3>
                  <p style="height: 50px; "><small> <?php echo $mostrar['nombre_producto']; ?> </small> </p>
                  <input type="text" hidden id="ver_producto" name="ver_producto" value="<?php echo $mostrar['id'] ?>">
                  <input type="text" hidden id="nombre" name="nombre" value="<?php echo $mostrar['nombre_producto'] ?>">

                </div>
              </div>
            </button>
            </form>
            </figure>
       </figure>
       </div>
        <?php
        endwhile;
        
      ?>
      
      <?php
    }
      ?>
    </div>
  
  <br><br>
<?php
if (isset($_GET['busqueda'])) {
  include 'procedimientos_externos/barra_paginar_buscar_index.php';
}
if (!isset($_GET['busqueda'])&&(isset($_GET['pagina']))) {
  include 'procedimientos_externos/barra_paginar_index.php';
}
  ?>
  
  
<br>



  <small class="nav-footer-copyright">
				Copyright © <?php echo date("Y"); ?> <a href="" target="_blank">MercaSeguro</a> Todos los derechos reservados | Diseñado por <a href="" target="_blank">MercaSeguro</a>
      </small><br>
      
<div class="nav-footer-tertiary-info nav-bounds mt-3">
				<a class="nav-footer-sic-logo mr-5" href="http://www.sic.gov.co/" target="_blank" rel="nofollow">
					<img class="pum-lazy" src="https://http2.mlstatic.com/ui/navigation/5.6.0/mercadolibre/sic.png" width="141" height="30" alt="SIC - Industria y comercio" srcset="https://http2.mlstatic.com/ui/navigation/5.6.0/mercadolibre/sic@2x.png 2x">
				</a>
				<a class="nav-footer-sic-logo" href="http://www.sic.gov.co/pare-y-compare" target="_blank" rel="nofollow">
					<img class="pum-lazy" src="https://http2.mlstatic.com/ui/navigation/5.6.0/mercadolibre/pum.png" width="200" height="34" alt="Precio por unidad de medida" srcset="https://http2.mlstatic.com/ui/navigation/5.6.0/mercadolibre/pum@2x.png 2x">
				</a>
				
      </div>
   
      
<br>
</body>

</html>