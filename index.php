<?php
include('includes/verify_install.php');
include('includes/db.php');


?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/estilo_inicio.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>MercaSeguro</title>

  <?php include 'accesorios/navbar.php' ?>
</head>
<body>



<!-- CARUSSEL AUTOMATICO -->
<?php include 'accesorios/carrusel.php' ?>
      <P><!-- texto dentro de DESCUENTOS 10% --></P>
    <div class=" alert alert-primary mb-3  "> <center><h1 style="color: rgb(5, 54, 160);"><b> DESCUENTOS DESDE EL 10% </b></h1> </center> </div>
    
    


<!-- Fila 1 de PRODUCTOS  -->
<div class="container">
    <div class="row sm-12 ">
      
      <?php


      $sql = "SELECT * FROM productos ";
      $result = DB::query($sql);
      while ($mostrar = mysqli_fetch_array($result)) {
      ?>


<div class="container-sm-12 mb-4">
    <div class="card btn-light ml-4" style="width: 14.3rem; ">
      <div class="card-body">
      <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="170px" class="card-img-top" alt="OO">
      <h6 class="card-title "><?php echo $mostrar['nombre_producto']; ?> </h6>  
      <p class="card-text-success">$ <?php echo $mostrar['precio']; ?> </p>
        
      </div>
    </div>
  </div>



      <?php
      }

      ?>




    </div>
  </div>


</body>
</html>