<?php
include('../includes/verify_install.php');
include('../includes/db.php');

//  $result= mysqli_query($con,$sql);
SESSION_START();
if (isset($_SESSION['id'])) {
  $ides = $_SESSION['id'];
} else {
  $ides = 0;
}
?>
<!doctype html>
<html lang="es">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <title>MercaSeguro</title>

  <title>Mis Productos</title>
  <?php include '../accesorios/navbar_plus.php' ?>
</head>

<body>


  <!--Fin Header: Primera parte de la pagina-->



  <div class="container ">
    <h2 class="animated infinite pulse delay">Mis productos</h2> <br>

    <div class="container ">

      <div class="row sm-12">
        <?php
        $sql = "SELECT * FROM productos 
        INNER JOIN subcategoria
        ON productos.id_categoria_producto = subcategoria.id
        INNER JOIN categorias_productos
        ON subcategoria.id_categoria = categorias_productos.id";
        $result = DB::query($sql);
        ?>
        <?php
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>

          <?php
          if ($ides == $mostrar['id_usuarios']) {
          ?>

            <div class="contenedor sm-12 mb-4">
              <figure>

                <div class="card btn-light  " style="max-width: 260px; max-height: 400px; position: relative">
                  <div class="color">
                    <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="120px" class="card-img-top" alt="OO">
                    <div class="card-body">

                      <h5><?php echo $mostrar['nombre_producto']; ?> </h5>
                      </div>
                      
                      <small> <p>Valor Unitario : <?php echo $mostrar['precio'] ?></p></small>
                      <small> <p>Categoria : <?php echo $mostrar['nombre_cat_producto'] ?></p></small>
                    

                    <form action="editar_producto.php" method="get">
                    <div class="capa">
                      <p><button class="btn btn-primary" type="submit" name="id_form_editar" value="<?php  $mostrar['id'] ?>" >Editar</button>
                       <button class="btn btn-danger" onClick=" window.location.href='##.php' " >Eliminar</button></p>
                </div>
                    </form>
                  </div>
                </div>

              </figure>

            </div>

            <!------------------------------- ESTADO - EDITAR -ELIMINAR --------------------------------------->


        <?php
          }
        }
        ?>
      </div>
      <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
      <input type="hidden" name="estado" value="<?= $mostrar['estado'] ?>">

      <?php if ($mostrar['estado'] == "activo") {  ?>
        <th>
          <a class="btn btn-secondary" href="crear_producto.php?estado=<?= $mostrar['estado'] ?>&id=<?= $mostrar['id'] ?>" class="ini">Inactivar</a>
        </th>

      <?php } else {  ?>

        <th>
          <a class="btn btn-success" href="crear_producto.php?estado=<?= $mostrar['estado'] ?>&id=<?= $mostrar['id'] ?>">Activar</a>
        </th>

      <?php  }  ?>
      <th>
        <a class="btn btn-primary" href="editar_producto.php?id=<?= $mostrar['id'] ?>" class="xd">Editar</a>
      </th>
      <th>
        <a class="btn btn-danger" href="eliminar_producto.php?id=<?= $mostrar['id'] ?>" class="delet">Eliminar</a>
      </th>
    </div>

  </div>

</body>

</html>