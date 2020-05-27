<?php
include "../includes/verify_install.php";

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

<link rel="stylesheet" type="text/css" href="../css/editor.css"><!---PARA EDITOR DE DESCRIPCION-->

<?php include '../accesorios/navbar.php' ?>


    <script languaje="javascript">
        $(document).ready(function() {
            $("#cbx_categoria").change(function() {
                /* Reinicia el select */


                $("#cbx_categoria option:selected").each(function() {
                    id_categoria = $(this).val();
                    $.post("getSubcategoria.php", {
                        id_categoria: id_categoria
                    }, function(data) {
                        $("#cbx_subcategoria").html(data);
                    });
                });
            })
        });
    </script>


</head>

<body>
    <?php
    $id_form_producto = $_REQUEST['id_form_editar'];

    include "../includes/db.php";
    $sql = "SELECT productos.nombre_producto,productos.descripcion_producto,productos.precio,
    productos.imagen_producto,productos.estado,subcategoria.nombre_sub_categoria,
    categorias_productos.nombre_cat_producto,productos.id AS id_producto,
    categorias_productos.id AS id_categoria, subcategoria.id AS id_subcategoria
    FROM productos
    INNER JOIN subcategoria
    ON
    subcategoria.id=productos.id_categoria_producto
    INNER JOIN categorias_productos
    ON subcategoria.id_categoria=categorias_productos.id
    WHERE productos.id='$id_form_producto'";

    $result = DB::query($sql);
    while ($mostrar = mysqli_fetch_array($result)) {
        /* echo $mostrar['nombre_producto']; */

        $nombre_producto = $mostrar['nombre_producto'];
        $descripcion_producto = $mostrar['descripcion_producto'];
        $precio = $mostrar['precio'];
        $id_categoria_producto = $mostrar['id_categoria'];
        $imagen_producto = $mostrar['imagen_producto'];
        $estado = $mostrar['estado'];
        $nombre_cat_producto = $mostrar['nombre_cat_producto'];
        $nombre_sub_categoria = $mostrar['nombre_sub_categoria'];
        $id_subcategoria = $mostrar['id_subcategoria'];
        $id_producto = $mostrar['id_producto'];

        /*  echo $id_subcategoria; */
    }

    ?>


    <!--- Editar Form paso a paso -->
    <div class="container ">
        <form class="vender_producto " id="regiration_form" action="../crear_producto.php" method="post" enctype="multipart/form-data">
            <!-- <h2> VISTA PREVIA DEL PRODUCTO </h2> --> <br>


    <div class="row "><!--inicio row 1-->
        
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
      <img src="https://sites.google.com/site/imagenesdecarrosgratis/_/rsrc/1421516636272/home/carros-deportivos-lamborghini-aventador-tron_aventador.jpg" height="300px" class="d-block w-100" alt="...">
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

                        <!-- <small><h6><b>Foto de tu producto</b></h6></small>

                        <div class="form-group">
                            <div class="imge justify-content-center ml-5">
                                <div id="imagePreview"><img class="zoom mt-3" src="https://sites.google.com/site/imagenesdecarrosgratis/_/rsrc/1421516636272/home/carros-deportivos-lamborghini-aventador-tron_aventador.jpg" height="300px" class="card-img-top" alt="OO"></div>
                                <br>
                                <input type="file" aling name="imagen" id="file-upload" accept="image/*" />

                            </div><br>

                        </div> -->
                      </div>
            </div>



      <div class="col-md-6"><!-- SEGUNDA MITAD DE PARA COLOCAR CAMPOS -->
         


          <div class="row"><!--inicio row 2-->
               <div class="col-md-12 ">
                 <!--Nombre Producto-->
                <div class="col-12">
                    <small><h6><b>Nombre del producto</b></h6></small>
                    <div class="form-group"><br>
                        <!-- <input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>"> -->
                    </div>
                </div>
               </div>





                        
              <div class="col-md-12 "><br><br>
                  <!--Precio Producto-->
                  <div class="col-12" >
                
                <small><h6><b>Precio</b></h6></small>
                    <div class="form-group ">

                        <label><b>$ </b><!-- <input type="text" class="form-input2 infor" name="precio" style="width: 14rem;" placeholder="Valor del producto" value="<?php echo $precio ?>"> --></label>

                    </div>
                </div>
              </div>





            
                <div class="col-md-12 ">
                  <!---boton comprar--->
                  <br><br>
                    <div class="row-12">
                    <input type="submit" name="submit" class="submit btn btn-primary" value=" COMPRAR AHORA " id="regt" />
                    </div>
                </div>






          </div><!--fin row 2-->
        </div><!--fin segunda mitad-->
   </div><!--fin row 1-->

      
                

    <div class="row ml-4"> <!--Bloque debajo de division 1 y 2 -->
          <div class="col-md-7 ">
            <!-- Descripcion -->
            <p align="justify">
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
            
            </p>
          </div>


          <div class="col-md-4 mt-5">
            <!-- alado de descripcion -->
            <p align="justify">
            Donec sed odio dui. t. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
            </p>

          </div>
    </div>
              
            
       




  <?php include '../js/texeditor.js' ?><!--complemento para editar descripcion-->

</body>

</html>

<script type="text/javascript">
    (function() {
        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').html("<img  src='" + e.target.result + "' height='135px' class='img-prev' />");
                }
                reader.readAsDataURL(input.files[0]);
            }

        }
        $('#file-upload').change(function() {
            filePreview(this);
        });
    })();