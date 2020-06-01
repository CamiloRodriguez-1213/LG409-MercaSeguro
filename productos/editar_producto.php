<?php
include "../includes/verify_install.php";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA TUS PRODUCTOS</title>

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

    <?php include "../accesorios/navbar_plus.php" ?>


    <script languaje="javascript">
        $(document).ready(function() {
            $("#categoria_producto").change(function() {
                /* Reinicia el select */


                $("#categoria_producto option:selected").each(function() {
                    id_categoria = $(this).val();
                    $.post("formularios_productos/subcategoria_producto.php", {
                        id_categoria: id_categoria
                    }, function(data) {
                        $("#subcategoria_producto").html(data);
                    });
                });
            })
        });
    </script>


</head>

<body>
    <?php
    $id_form_producto = $_POST['id_form_editar'];

    include "../includes/db.php";
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
    WHERE productos.id='$id_form_producto'";

    $result = DB::query($sql);
    while ($mostrar = mysqli_fetch_array($result)) {
        $id_producto = $mostrar['id_producto'];
        $nombre_producto = $mostrar['nombre_producto'];
        $descripcion_producto = $mostrar['descripcion_producto'];
        $precio = $mostrar['precio'];
        $imagen_producto = $mostrar['imagen_producto'];
        $estado = $mostrar['estado'];
        $id_subcategoria = $mostrar['id_subcategoria'];
        $nombre_cat_producto = $mostrar['nombre_subcat'];
        $id_categoria = $mostrar['id_categoria'];
        $nombre_sub_categoria = $mostrar['nombre_cat'];
        
        

        
    }

    

    ?>


    <div class="container">
        <form action="../procesos_productos/actualizar_producto.php" method="post" id="regiration_form" enctype="multipart/form-data">
        <div class="row justify-content-md-center">

            <div class="col-md-auto my-4">

                <div class="form-group"><br>
                    <small>
                        <h6><b>Nombre de tu producto</b></h6>
                    </small>
                    <input type="text" class="form-input2 infor" name="nombre_producto" style="width: 14rem;" required placeholder="Nombre Producto" value="<?php echo $nombre_producto ?>">
                </div>
            </div>
            <div class="col col-lg-2">
                
            </div>
            <div class="col-md-auto my-4">
                <div class="form-group"><br>
                    <small>
                        <h6><b>Precio</b></h6>
                    </small>
                    <b>$ </b><input type="text" class="form-input2 infor" name="precio_producto" style="width: 14rem;" placeholder="Valor del producto" value="<?php echo $precio ?>">

                </div>
            </div>

        </div>
        <div class="row justify-content-md-center">

            <div class="col-md-auto ">
                <div class="form-group">
                    <small>
                        <h6><b>Categoria</b></h6><br><br>
                    </small>
                    <select class="form-control" name="categoria_producto" id="categoria_producto">
                        <?php 
                        $sql = "SELECT id, nombre_cat FROM categorias_productos";
                        $result = DB::query($sql); ?>
                        <option value="">Seleccionar Categoria</option>

                        <?php while ($mostrar = $result->fetch_assoc()) { ?>
                            <option value="<?php echo $id_categoria_producto  ?>" hidden selected><?php echo $nombre_cat_producto; ?></option>
                            <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre_cat']; ?></option>
                        <?php }
                        ?>


                    </select>
                    <br>
                    <select class="form-control" name="subcategoria_producto" id="subcategoria_producto">
                        <option value="<?php echo $id_subcategoria ?>" hidden selected><?php echo $nombre_sub_categoria; ?></option>

                    </select>
                </div>
            </div>

            <div class="col col-lg-2">
                
            </div>
            <div class="col-md-auto">
                <div class="form-group">
                    <small>
                        <h6><b>Foto de tu producto</b></h6>
                    </small>
                    <div class="imge">
                        <div id="imagePreview">
                        </div>
                        <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($imagen_producto) ?>" height="120px" class="card-img-top" alt="OO">
                        <br><br>
                        <label for="file-upload" class="custom-file-upload">

                            <i class="fa fa-cloud-upload"></i> Subir archivo
                        </label>
                        <input type="file" hidden name="imagen_producto" value="<?php echo base64_encode($imagen_producto) ?>">
                        <input type="file" aling name="imagen_prodcto" id="file-upload" accept="image/*" />

                    </div>

                </div>

            </div>
        </div>
        <div class="row justify-content-md-center">

            <div class="col-md-12">

            <div class="form-group">
                    <small><h6><b>Descripción</b></h6></small>

                            <!--EDITOR DE TEXTO EN EDITAR PRODUCTOS-->
                            <div id="con-editor">
                            		<div id="editor">
                            			<div id="cajaTexto" contenteditable placeholder="Describe tu producto"><!--texto de editor-->
                                        <textarea class="text_editar" style="width: 100%;height: 100%" name="descripcion_producto">
                                        <?php echo $descripcion_producto ?>
                                        </textarea>
                                        
                            			</div>
                            		</div>
                             </div>
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class=" btn btn-primary" value="Publicar" id="regt" />
            <input type="text" name="id_producto" hidden value="<?php echo $id_producto ?>">
            </form>
        </div>

        <?php include '../js/texeditor.js' ?>
        <!--complemento para editar descripcion-->
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