<?php
include "../includes/verify_install.php";
include('../login_logout/login.php');
if (!$_GET ) {
  header('Location:../index.php');
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista Previa</title>

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflcv97xo/www-widgetapi.js" async=""></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">

  <link rel="stylesheet" type="text/css" href="../css/editor.css"><!-- PARA EDITOR DE DESCRIPCION -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top row-12 sm-12 md-4">

  
<h5><a class="navbar-brand ml-5" href="../index.php">MercaSeguro </a></h5>
  <ul class="navbar-nav ml-4 mr-2">
  
  
  <form action="../index.php?pagina=1" class="form-inline my-2 my-lg-0" method="GET">
        <div class="row">
          <div class="input-group">
              <input class="form-control" type="text" name="busqueda" id="busqueda" value="<?php if (isset($_GET['busqueda'])) { echo $_REQUEST['busqueda']; }?>"  placeholder="Busca tus productos">
              <input class="form-control" hidden type="text" name="pagina" id="pagina" value="1"  placeholder="Busca tus productos">
              <span class="input-group-append">
                  <button class="btn btn-outline-secondary"  type="submit" >
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
  <?php
  $id_form_producto = $_REQUEST['ver_producto'];
  $nombre_producto_form=$_REQUEST['nombre'];

include "../includes/db.php";
$sql = "SELECT * FROM productos where nombre_producto='$nombre_producto_form' AND id='$id_form_producto'";
           
           $result = DB::query($sql);
           /* Contamos numero de registros o filas */
           $result_consulta = $result->num_rows;
if ($result_consulta!=0) {
  if (isset ($_REQUEST['ver_producto'])&& isset($_REQUEST['nombre'])){

    
  $sql = "SELECT productos.id AS id_producto, nombre_producto, descripcion_producto,precio,imagen_producto,estado,
  subcategorias_productos.id AS id_subcategoria,nombre_subcat,
  categorias_productos.id AS id_categoria,nombre_cat,id_clase_producto,
  usuarios.id AS id_usuario,nombre_usuario,apellido_usuario,email,celular,whatsapp,ciudad,direccion,
  clase_producto.id AS id_clase_producto, nombre_clase
  FROM productos
  INNER JOIN subcategorias_productos
  ON productos.id_categoria_producto=subcategorias_productos.id
  INNER JOIN categorias_productos
  ON subcategorias_productos.id_categoria= categorias_productos.id
  INNER JOIN usuarios
  ON productos.id_usuarios = usuarios.id
  INNER JOIN clase_producto
  ON categorias_productos.id_clase_producto=clase_producto.id
  WHERE productos.id='$id_form_producto' AND nombre_producto='$nombre_producto_form'";

  $result = DB::query($sql);
  while ($mostrar = mysqli_fetch_array($result)) {
    $id_producto = $mostrar['id_producto'];
    $nombre_producto = $mostrar['nombre_producto'];
    $descripcion_producto = nl2br($mostrar['descripcion_producto']);
    $precio = $mostrar['precio'];
    $imagen_producto = base64_encode($mostrar['imagen_producto']);
    $estado = $mostrar['estado'];
    $nombre_cat_producto = $mostrar['nombre_cat'];
    $nombre_sub_categoria = $mostrar['nombre_subcat'];
    $nombre_usuario = $mostrar['nombre_usuario'];
    $apellido_usuario =$mostrar['apellido_usuario'];
    $whatsapp = $mostrar['whatsapp'];
    
  }

  ?>
  
  <!--- Editar Form paso a paso -->
  <div class="container ">
    <form class="vender_producto " id="regiration_form" action="../crear_producto.php" method="post" enctype="multipart/form-data">
      <!-- <h2> VISTA PREVIA DEL PRODUCTO </h2> --> <br>


      <div class="row ">
        <!--inicio row 1-->
        <div class="col-md-6 ">
          <!--Foto de Producto-->
          <div class="col-12 ">
<?php

?>
          
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="zoom_vistaprevia mt-3" src="data:image/jpg;base64,<?php echo $imagen_producto ?>" height="300px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img class="zoom_vistaprevia mt-3" src="data:image/jpg;base64,<?php echo $imagen_producto ?>" height="300px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img class="zoom_vistaprevia mt-3" src="data:image/jpg;base64,<?php echo $imagen_producto ?>" height="300px" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><br><!-- final carrusel -->
            

          </div>
        </div>
        <div class="col-md-6">
          <!-- SEGUNDA MITAD DE PARA COLOCAR CAMPOS -->
          <div class="row">
            <!--inicio row 2-->
            <div class="col-md-12 ">
              <!--Nombre Producto-->
              <div class="col-12">
                <small>
                  <h6><b>Nombre del producto</b></h6>
                </small>
                <div class="form-group"><br>
                  <?php echo $nombre_producto; ?>
                </div>
              </div>
            </div>
            <div class="col-md-12 "><br>
              <!--Precio Producto-->
              <div class="col-12">

                <small>
                  <h6><b>Precio</b></h6>
                </small>
                <div class="form-group ">

                  <label><b>$ </b><?php echo $precio; ?>

                </div>
              </div>
            </div><br><br>

            <div class="col-md-12 ">
              <!--Compra protegida-->
              <div class="col-12">
                <small>
                  <!-- <h6><b>Compra protegida</b></h6> -->
                </small>
                <div class="form-group "><br>
                  
                <i style="font-size:24px" class="fa">&#xf132;</i> Compra-protegida<br>
                <i style="font-size:24px" class="fa">&#xf091;</i> Sin Mercado Puntos<br>
                <!-- <i class="material-icons">&#xe558;</i> ddd<br> -->
                </div>
              </div>
            </div>

            <div class="col-md-12 ">
              <!---boton comprar--->
              <br><br>
              <div class="row-12">
                
                <a href="confirmacion_compras.php?producto=<?php echo $id_producto;?>&nombre_producto=<?php echo $nombre_producto ?>">
                <input type="button" name="submit" class="submit btn btn-primary" value=" Comprar ahora " id="regt" />
                </a>
              </div>
            </div>
          </div>
          <!--fin row 2-->
        </div>
        <!--fin segunda mitad-->
      </div>
      <!--fin row 1-->

      <div class="row">
        <!--Bloque debajo de division 1 y 2 -->
        <div class="col-md-7 ">
          <!-- Descripcion -->
          <h4><b>Descripción </b></h4>
          <p align="justify">
            <?php echo $descripcion_producto; ?>
          </p>
        </div>

 <div class="col-md-4 mt-5">
          <!-- alado de descripcion -->
          <p align="justify">
            <?php echo $nombre_usuario.' '.$apellido_usuario;?>
                <br>
            <?php echo $nombre_cat_producto; ?>
                <br>
            <?php echo $nombre_sub_categoria; ?>
              <br>
              <i class="fab fa-whatsapp" style="font-size:20px"></i>  <?php echo $whatsapp;
            ?>
            
          </p>

        </div>
         
      </div>
<?php 
} 
}else{
  ?>
  <script>window.history.back();</script>
  <?php
}

?>
</body>

</html>