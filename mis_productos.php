<?php
include('includes/verify_install.php');
include('includes/db.php');

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
  <title>MIS PRODUCTOS PARA LA VENTA</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Last-Modified" content="0">
  <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
  <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  


</head>

<body>
  
  <div id="header-index">
    <!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

  </div>
  <!--Fin Header: Primera parte de la pagina-->


  <div class="a2 container">
    <h2 class="animated infinite pulse delay">Mis productos</h2> <br>

    <div class="container">

      <div class="row ">
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

            <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
              <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="135px" class="card-img-top" alt="OO">
              <div class="card-body">
              <h5 class="card-title "><?php echo $mostrar['nombre_producto']; ?> </h5>
                
                </small>
                <small class="text-muted">Valor Unitario : <?php echo $mostrar['precio'] ?></small><br>
                <small class="text-muted">Categoria : <?php echo $mostrar['nombre_cat_producto'] ?></small>
              </div>
            </div>




            <!------------------------------- ESTADO - EDITAR -ELIMINAR --------------------------------------->




          <?php
          }
          ?>

        <?php
        }
        ?>

      </div>
      <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
      <input type="hidden" name="estado" value="<?= $mostrar['estado'] ?>">

      <?php if ($mostrar['estado'] == "activo") {  ?>
        <th>
          <a class="btn btn-secondary" href="crear_producto.php?estado=<?= $mostrar['estado'] ?>&id=<?= $mostrar['id'] ?>" class="ini">Inactivar</a>
        </th>

      <?php  } else {  ?>

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