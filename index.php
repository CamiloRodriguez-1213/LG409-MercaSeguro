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
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>


  <title>Mis Productos</title>
  <?php include '../accesorios/navbar_plus.php' ?>
</head>

<body>
  <div class="container my-5 justify-content-around" style="max-width: 100%">
    <?php
    $sql = "SELECT productos.id AS id_producto,estado,nombre_producto,descripcion_producto,precio,id_categoria_producto
    ,imagen_producto,id_usuarios,estado,sub_cat_productos.id AS id_subcategoria,nombre_sub_producto,cat_productos.id 
    AS id_categoria,nombre_cat_producto
    FROM productos 
            INNER JOIN sub_cat_productos
            ON productos.id_categoria_producto = sub_cat_productos.id
            INNER JOIN cat_productos
            ON sub_cat_productos.id_cat_producto = cat_productos.id WHERE estado='activo'";
    $result = DB::query($sql);
    ?>
    <div class="row row-12 justify-content-around">
      <div class="d-flex flex-row">

        <div class="p-2">
          <div class="input-group">
            <input class="form-input3" type="text" name="busqueda" id="busqueda" placeholder="Busca tus productos">
            
              <i class="fa fa-search resalta" style="cursor: pointer"></i>

          </div>
        </div>
        <div class="p-2">
          <h5><small><a href="">Activos</a></small></h5>
        </div>
        <div class="p-2">
          <h5><small><a href="">Inactivos</a></small></h5>
        </div>
        <div class="p-2">
          <h5><small><a href="">Todos</a></small></h5>
        </div>
      </div>

    </div>

    <div class="row ">
      <!-- Solo se mirará en computador -->
      <div class="d-none d-sm-none d-md-none d-lg-block">
        <div class="col" style="width: 150px">
          <div class="d-flex flex-column">

            <div class="p-2">
              <h5><small>Vendidos</small></h5>
            </div>
            <div class="p-2">
              <h5><small>En espera</small></h5>
            </div>
            <div class="p-2">
              <h5><small>Reclamos</small></h5>
            </div>
          </div>
        </div>
      </div>

      <div class="col sm-12 justify-content-around">
        <div class="row">

          <?php

          while ($mostrar = mysqli_fetch_array($result)) : ?>

            <div class="contenedor">


              <div class="card my-3 ml-5 producto-hover <?php if ($mostrar['estado'] == "inactivo") { ?> producto_inactivo <?php } ?>" style="width: 240px; height: 360px;">

                <div class="container ">
                  <div class="capa btn-group navn dropleft my-3" style="float: right">

                    <i class="fas fa-ellipsis-v resalta" style="width: 20px; height: 18px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"></i>

                    <div class="dropdown-menu mr-1" aria-labelledby="navbarDropdown">
                      <form action="editar_producto.php" method="POST">
                        <button class="dropdown-item" type="submit">Editar</button>
                        <input type="text" hidden id="id_form_editar" name="id_form_editar" value="<?php echo $mostrar['id_producto'] ?>">
                      </form>
                      <form action="../procesos_productos/actualizar_producto.php" method="POST">
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
                      <form action="../procesos_productos/" method="post">
                        <button class="dropdown-item" id="id_form_editar" name="id_form_editar" value="<?php echo $mostrar['id_producto'] ?>" type="submit">Eliminar</button>
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


  </div>

</body>

</html>