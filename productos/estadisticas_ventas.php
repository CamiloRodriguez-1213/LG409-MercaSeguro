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

<div class="row justify-content-around my-3">


    <?php
    $sql = "SELECT productos.id AS id_producto,estado,nombre_producto,descripcion_producto,precio,id_categoria_producto
    ,imagen_producto,id_usuarios,estado,subcategoria.id AS id_subcategoria,nombre_sub_categoria,categorias_productos.id 
    AS id_categoria,nombre_cat_producto
    FROM productos 
            INNER JOIN subcategoria
            ON productos.id_categoria_producto = subcategoria.id
            INNER JOIN categorias_productos
            ON subcategoria.id_categoria = categorias_productos.id WHERE estado='activo'";
    $result = DB::query($sql);
    ?>
    
      <div class="col-1" >
       
        <div class="d-flex flex-column">
          <div class="p-2">Flex item 1</div>
          <div class="p-2">Flex item 2</div>
          <div class="p-2">Flex item 3</div>
        </div>
      </div>
      <?php

      while ($mostrar = mysqli_fetch_array($result)) : ?>

      <?php
      endwhile
      ?>
    

  </div>




</body>

</html>