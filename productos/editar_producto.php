<?php
include "../includes/verify_install.php";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Productos</title>

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

    <?php include "../accesorios/navbar_plus.php" ?>


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
        <form class="vender_producto" id="regiration_form" action="../crear_producto.php" method="post" enctype="multipart/form-data">
            <h2> EDITANDO MIS PRODUCTOS </h2><br><br>
            <div class="row md-2">

                <div class="col-6">
                    <small><h6><b>Nombre de tu producto</b></h6></small>
                    <div class="form-group"><br>
                        <input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>">
                    </div>
                </div>


                <?php
                $sql = "SELECT id, nombre_cat_producto FROM categorias_productos";

                $result = DB::query($sql);

                ?>

                <div class="col-6">
                <small><h6><b>Precio</b></h6></small>
                    <div class="form-group ml-3">

                        <label><b>$ </b><input type="text" class="form-input2 infor" name="precio" style="width: 14rem;" placeholder="Valor del producto" value="<?php echo $precio ?>"></label><br><br>

                    </div>
                </div>

                <div class="col-6 mt-4">
                <small><h6><b>Categoria</b></h6></small>
                    <div class="form-group ">
                        <div class="row justify-content-center align-items-center">
                            <div class="form-group">
                                
                                <select class="form-control " name="cbx_categoria" id="cbx_categoria">

                                    <option value="">Seleccionar Categoria</option>

                                    <?php while ($mostrar = $result->fetch_assoc()) { ?>
                                        <option value="<?php echo $id_categoria_producto  ?>" hidden selected><?php echo $nombre_cat_producto; ?></option>
                                        <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre_cat_producto']; ?></option>
                                    <?php }
                                    ?>


                                </select>
                                <br>
                                <select class="form-control" name="cbx_subcategoria" id="cbx_subcategoria">
                                    <option value="<?php echo $id_subcategoria ?>" hidden selected><?php echo $nombre_sub_categoria; ?></option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                <small><h6><b>Foto de tu producto</b></h6></small>

                    <div class="form-group">
                        <div class="imge justify-content-center">
                            <div id="imagePreview"><img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($imagen_producto) ?>" height="120px" class="card-img-top" alt="OO"></div>
                            <br><br>
                            <label for="file-upload" class="custom-file-upload">

                                <i class="fa fa-cloud-upload"></i> Subir archivo
                            </label>

                            <input type="file" aling name="imagen" id="file-upload" accept="image/*" />

                        </div><br>

                    </div>



                </div>
                <div class="col-12">
                    <small><h6><b>Descripción</b></h6></small>

                    <div class="form-group">

                            <!--EDITOR DE TEXTO EN EDITAR PRODUCTOS-->
                            <div id="con-editor">
                            		<div id="editor">
                            			<div name="descripcion" id="cajaTexto" contenteditable placeholder="Describe tu producto"><!--texto de editor-->
                                            <?php echo $descripcion_producto ?>
                            			</div>
                            		</div>
                             </div>
                            <!------>

                    </div>
                </div>

                <div class="col 12">
                    <input type="submit" name="submit" class="submit btn btn-primary" value=" Publicar " id="regt" />
                </div>
            </div>
        </form>
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