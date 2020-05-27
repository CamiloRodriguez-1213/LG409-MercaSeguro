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
<div class="container ">
    
    <h2 class="animated infinite pulse delay my-5">Mis productos</h2> <br>


<?php
  $sql = "SELECT productos.id AS id_producto,nombre_producto,descripcion_producto,precio,id_categoria_producto
    ,imagen_producto,id_usuarios,estado,subcategoria.id AS id_subcategoria,nombre_sub_categoria,categorias_productos.id 
    AS id_categoria,nombre_cat_producto
    FROM productos 
            INNER JOIN subcategoria
            ON productos.id_categoria_producto = subcategoria.id
            INNER JOIN categorias_productos
            ON subcategoria.id_categoria = categorias_productos.id";
  $result = DB::query($sql);
  ?>
    <div class="row justify-content-around">
      <?php
      
      while ($mostrar = mysqli_fetch_array($result)) : ?>

        <div class="contenedor  sm-12 md-4">
          <figure>

            <div class="card mr-2" style="width: 240px; height: 340px; ">
              <div class="color">
                <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="108rem" class="card-img-top" alt="OO">
                <br><br>
                
                <h3 class="card-text-success">$ <?php echo $mostrar['precio']; ?> </h3>
                <p style="height: 50px"><small> <?php echo $mostrar['nombre_producto']; ?> </small> </p>
                <div class="capa">
                  
                  
                    <form action="editar_producto.php" method="GET">

                      <p><button class="btn btn-primary" id="id_form_editar" name="id_form_editar" value="<?php echo $mostrar['id_producto'] ?>" type="submit">Editar</button>
                        <button class="btn btn-danger" onClick=" window.location.href='#' ">Eliminar</button></p>
                    </form>

                  </div>
              </div>
            </div>
          </figure>
        </div>
      <?php
      endwhile
      ?>
    </div>
  </div>


  

</body>

</html>