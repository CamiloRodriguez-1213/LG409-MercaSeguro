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

    
  $sql = "SELECT 
  productos.id AS id_producto, nombre_producto, descripcion_producto,precio,imagen_producto,estado,
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
    $descripcion_producto = $mostrar['descripcion_producto'];
    $precio = $mostrar['precio'];

    $imagen_producto = base64_encode($mostrar['imagen_producto']);
    $estado = $mostrar['estado'];
    $nombre_cat_producto = $mostrar['nombre_cat'];
    $nombre_sub_categoria = $mostrar['nombre_subcat'];
    $nombre_usuario = $mostrar['nombre_usuario'];
    
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
          <div class="col-12 ml-5">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo $imagen_producto ?>" height="300px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://sites.google.com/site/imagenesdecarrosgratis/_/rsrc/1421516636272/home/carros-deportivos-lamborghini-aventador-tron_aventador.jpg" height="300px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://sites.google.com/site/imagenesdecarrosgratis/_/rsrc/1421516636272/home/carros-deportivos-lamborghini-aventador-tron_aventador.jpg" height="300px" class="d-block w-100" alt="...">
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
            </div><br>
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
            <div class="col-md-12 "><br><br>
              <!--Precio Producto-->
              <div class="col-12">

                <small>
                  <h6><b>Precio</b></h6>
                </small>
                <div class="form-group ">

                  <label><b>$ </b><?php echo $precio; ?>

                </div>
              </div>
            </div>
            <div class="col-md-12 ">
              <!---boton comprar--->
              <br><br>
              <div class="row-12">
                <input type="button" name="submit" class="submit btn btn-primary" value=" COMPRAR AHORA " id="regt" />
              </div>
            </div>
          </div>
          <!--fin row 2-->
        </div>
        <!--fin segunda mitad-->
      </div>
      <!--fin row 1-->

      <div class="row ml-4">
        <!--Bloque debajo de division 1 y 2 -->
        <div class="col-md-7 ">
          <!-- Descripcion -->
          <p align="justify">
            <?php echo $descripcion_producto; ?>
          </p>
        </div>


        <div class="col-md-4 mt-5">
          <!-- alado de descripcion -->
          <p align="justify">
            <?php echo $nombre_usuario;


            echo $nombre_cat_producto;
            echo $nombre_sub_categoria;
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
