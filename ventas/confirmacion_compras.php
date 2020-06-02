<?php
include "../includes/verify_install.php";

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmacion Compra</title>

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflcv97xo/www-widgetapi.js" async=""></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">

  <link rel="stylesheet" type="text/css" href="../css/editor.css">
  <!---PARA EDITOR DE DESCRIPCION-->

  <?php include('../accesorios/navbar_plus.php') ?>




</head>

<body>



  <!--- Editar Form paso a paso -->
  <div class="container ">

  <?php
  $id_form_producto = $_REQUEST['confirmacion_compras.php'];
  $nombre_producto_form=$_REQUEST['nombre'];

include "../includes/db.php";

  

  if (isset ($_REQUEST['confirmacion_compras.php']) && isset($_REQUEST['nombre'])){

    
  $sql = "SELECT 
  productos.id AS id_producto, nombre_producto, precio,imagen_producto,
  nombre_usuario,email,whatsapp,ciudad
  FROM productos
  INNER JOIN subcategorias_productos
  ON productos.id_categoria_producto=subcategorias_productos.id
  INNER JOIN categorias_productos
  ON subcategorias_productos.id_categoria= categorias_productos.id
  INNER JOIN usuarios
  ON productos.id_usuarios = usuarios.id
  WHERE productos.id='$id_form_producto' AND nombre_producto='$nombre_producto_form'";

  $result = DB::query($sql);
  while ($mostrar = mysqli_fetch_array($result)) {
    $id_producto = $mostrar['id_producto'];
    $nombre_producto = $mostrar['nombre_producto'];
    $precio = $mostrar['precio'];
    $imagen_producto = base64_encode($mostrar['imagen_producto']);
    $nombre_usuario = $mostrar['nombre_usuario'];
    $email = $mostrar['email'];
    $whatsapp = $mostrar['whatsapp'];
    $ciudad = $mostrar['ciudad'];
    
    
  }
  }
  ?>

    <div class="row ">
      <!--inicio row 1-->

      <div class="col-md-7  ">
        <!-- Primera MITAD de (7 columnas) PARA COLOCAR CAMPOS de Informacion -->
        <!-- Foto de Producto -->
        <div class="col-12  "> <br>
          <div class="col-12">
            <small>
              <h6><b>AQUI NOMBRE DEL PRODUCTO </b></h6>
            </small>
            <div class="form-group"><br>
              <input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>">
            </div>
          </div>
          <br>
        </div><br>


        <div class="col-md-12  ">
          <!-- Foto de Producto -->
          <div class="col-12 ">
            <div class="col-12">
              <small>
                <h6><b>Aqui Medios de pago (Efecty) </b></h6>
              </small>
              <!-- <div class="form-group"><br>
                         <input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>"> 
                    </div> -->
            </div>
            <br>
          </div>
        </div><br>




        <div class="col-md-12  ">
          <!-- Foto de Producto -->
          <div class="col-12 ">
            <div class="col-12">
              <small>
                <h6><b>Aqui Datos para tu factura</b></h6>
              </small>
              <!-- <div class="form-group"><br>
                         <input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>"> 
                    </div> -->
            </div>
            <br>
          </div>
        </div><br>




        <div class="col-md-12 ">
          <!-- Foto de Producto -->
          <div class="col-12 ">
            <div class="col-12">
              <small>
                <h6><b>Aqui datos del vendedor </b></h6>
              </small>
              <!-- <div class="form-group"><br>
                         <input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>"> 
                    </div> -->
            </div>
            <br>
          </div>
        </div><br>






        <div class="col-md-12 ">
          <!-- Foto de Producto -->
          <div class="col-12 ">
            <div class="col-12">
              <small>
                <h6><b>Aqui Otro medio de pago (Targeta dev) </b></h6>
              </small>
              <br>

              <a style="text-decoration:none" href="https://www.servientrega.com/wps/portal/Colombia/personas/inicio" target="_blank"> <img class="mr-2" src="../img/servientrega.png" style="height:40px; width: 190px;"> </a>

              <a href="https://www.efecty.com.co/" target="_blank"> <img class="ml-2" src="../img/efecty.png" style="height:42px; width: 150px;"> </a>

            </div>

          </div>
        </div>




      </div>







      <div class="col-md-5 ">
        <!-- SEGUNDA MITAD de (5 columnas) PARA COLOCAR CAMPOS de imagen -->



        <div class="row">
          <!--inicio row 2-->

          <div class="col-md-12 ">
            <!--Nombre Producto-->
            <div class="col-12 "><br>
              <!-- <small><h6><b>Imagen circular del producto</b></h6></small> -->
              <div class="circular--landscape bg-primary">
                <img src="../img/img-6.jpg" />
              </div>
              <div class="form-group"><br>
                <!-- <input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>"> -->
              </div>
            </div>
          </div>






          <div class="col-md-12 ">
            <!--Precio Producto-->
            <div class="col-12">

              <small>
                <h6><b>Precio</b></h6>
              </small>
              <div class="form-group">

                <label><b>$ </b><!-- <input type="text" class="form-input2 infor" name="precio" style="width: 14rem;" placeholder="Valor del producto" value="<?php echo $precio ?>"> --></label>

              </div>
            </div>
          </div>






          <div class="col-md-12 ">
            <!---boton comprar--->

            <div class="row-12">
              <input type="submit" name="submit" class="submit btn btn-primary" value="CONFIRMAR COMPRA " id="regt" />
            </div>
          </div>






        </div>
        <!--fin row 2-->
      </div>
      <!--fin segunda mitad-->
    </div>
    <!--fin row 1-->
  </div>


</body>

</html>