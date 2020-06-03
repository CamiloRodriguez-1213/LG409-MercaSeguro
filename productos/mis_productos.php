<?php
include('../includes/verify_install.php');
include('../includes/db.php');
include('../login_logout/login.php');
if (isset($_SESSION['id'])) {
  /* echo ($_SESSION['id']); */
  $id_sesion=$_SESSION['id'];
} else {
  header("location: ../index.php");
  session_destroy();
}
if (!$_GET) {
  header('Location:mis_productos.php?estado=activo&pagina=1');
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
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>


  <title>Mis Productos</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top row-12 sm-12 md-4">

  
<h5><a class="navbar-brand ml-5" href="../index.php">MercaSeguro </a></h5>
  <ul class="navbar-nav ml-4 mr-2">
  
  <form action="../index.php?pagina=1" class="form-inline my-2 my-lg-0" method="GET">
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
  <?php include '../accesorios/navbar_global.php' ?>
  
</head>

<body>
  <div class="container my-5 justify-content-around ">
  <div class="row justify-content-around">
      <div class="d-flex flex-row">
        <!-- <div class="p-2">
          <div class="input-group">
            <input class="form-input3" type="text" name="busqueda" id="busqueda" placeholder="Busca tus productos">
            
              <i class="fa fa-search resalta" style="cursor: pointer"></i>

          </div>
        </div> -->
        <!-- Solo se va a mostrar en computador -->
        <div class="d-none d-sm-none d-md-none d-lg-block">
        <div class="row">

          <h5 class="mr-2 ml-5"><small><a href="mis_productos.php?estado=activo&pagina=1" style="text-decoration:none">Activos</a></small></h5>
        
          <h5 class="mr-2 ml-2"><small><a href="mis_productos.php?estado=inactivo&pagina=1" style="text-decoration:none">Inactivos</a></small></h5>
        </div>
        </div>
        </div>
      </div>

    </div>
    <!-- Solo se va a mostrar en celular -->
    <div class="d-block d-sm-block d-md-block d-lg-none">
    <div class="row justify-content-around">
          <h5><small><a href="mis_productos.php?estado=activo&pagina=1" style="text-decoration:none">Activos</a></small></h5>
          <h5><small><a href="mis_productos.php?estado=inactivo&pagina=1" style="text-decoration:none">Inactivos</a></small></h5>
        </div>
    </div>
      <!-- Solo se mirará en computador -->
      
      
  
  <?php

  if (isset($_GET['estado'])) {
    $estado=$_REQUEST['estado'];
  if ($estado=='activo' || $estado=='inactivo'){
    include '../procedimientos_externos/paginacion_mis_productos.php';
  }else {
    header('Location:mis_productos.php?estado=activo&pagina=1');
  }

    
  ?>

  <div class="col">
  <div class="row justify-content-center">
          <?php
          while ($mostrar = mysqli_fetch_array($result_paginas)) : ?>

            <div class="contenedor mr-2 ml-2">
            

              <div class="card my-3  producto-hover <?php if ($mostrar['estado'] == "inactivo") { ?> producto_inactivo <?php } ?>" style="width: 240px; height: 360px;">

                <div class="container ">
                  <!-- Menu activar eliminar editar -->
                  <div class="capa btn-group navn dropleft my-3" style="float: right">

                    <i class="fas fa-ellipsis-v resalta" style="width: 20px; height: 18px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"></i>

                    <div class="dropdown-menu mr-1" aria-labelledby="navbarDropdown">
                      <form action="editar_producto.php" method="POST">
                        <button class="dropdown-item" type="submit">Editar</button>
                        <input type="text" hidden id="id_form_editar" name="id_form_editar" value="<?php echo $mostrar['id_producto'] ?>">
                      </form>
                      <form action="crear_editar_producto.php" method="POST">
                        <?php if ($mostrar['estado'] == "activo") {  ?>
                          <button class="dropdown-item" type="submit">Inactivar</button>
                          <input hidden id="id_producto" name="id_producto" value="<?php echo $mostrar['id_producto'] ?>">
                          <input hidden id="estado" id="estado" name="estado" value="<?php echo $mostrar['estado'] ?>">
                        <?php  } else {  ?>
                          <button class="dropdown-item">Activar</button>
                          <input hidden id="id_producto" name="id_producto" value="<?php echo $mostrar['id_producto'] ?>">
                          <input hidden id="estado" id="estado" name="estado" value="<?php echo $mostrar['estado'] ?>">
                        <?php  }  ?>

                      </form>
                      <form action="crear_editar_producto.php" method="POST">
                        <button class="dropdown-item" id="id_form_editar" name="id_form_editar" value="<?php echo $mostrar['id_producto'] ?>" type="submit">Eliminar</button>
                        <input type="text" hidden name="eliminar_producto">  
                        <input type="text" hidden name="id_producto" value="<?php echo $mostrar['id_producto'] ?>">  

                      </form>

                    </div>

                  </div>
                  <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" style="height: 150px; width: 200px" class="card-img-top" alt="OO">
                  <h3 class="card-text-success" style="height: 50px">$ <?php echo $mostrar['precio']; ?> </h3>
                  <p style="height: 50px"><small> <?php echo $mostrar['nombre_producto']; ?> </small> </p>

                </div>
              </div>

              </div>
              
          <?php
          endwhile
          ?>
          
        </div>
</div>

  </div>
      
  <?php 
  include '../procedimientos_externos/barra_paginar_mis_productos.php';
  } 
  ?>

</body>

</html>