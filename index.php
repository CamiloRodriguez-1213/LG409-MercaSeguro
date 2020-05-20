<?php
    include('includes/verify_install.php');
    include('includes/db.php');
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="complementos/inicio.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    
  <title>Inicio</title>
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
    <nav class="navbar navbar-expand navbar-light bg-warning sticky-top">
      <h1><a class="navbar-brand " href="#">MercaSeguro</a></h1>
      <?php  
 
    // SESSION_UNSET();
    SESSION_START();
    if(isset($_SESSION['id'])){
      $ides=$_SESSION['id'];
      header("Location: administrador.php");
    }else{      
    $ides=0;
  
   }
    ?>

      <ul class="navbar-nav  mr-auto">
        <form action="buscar_producto.php" class="form-inline my-2 my-lg-0" method="GET">
        <div class="row">
          <div class="input-group">
              <input class="form-control py-2" type="text" name="busqueda" id="busqueda" placeholder="Busca tus productos">
              <span class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" >
                      <i class="fa fa-search"></i>
                  </button>
              </span>
          </div>
        </div>
          
        </form>
      </ul>
        </nav>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarColor02">
  <ul class="navbar-nav  mr-auto">
          
          <li class="nav-item dropdown" id='dmenu'>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" style="padding: 22px 0;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Vehículos</a>
          <a class="dropdown-item" href="#">Tecnología</a>
          
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">Historial</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Oferta Semanal</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Vender</a>
          </li>
        
        </ul>
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="crear_usuario.php">Crea tu cuenta</a>
        </li>
        
        <li class="nav-item">
        
          <a class="nav-link" href="ingresar_usuario.php">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mis compras</a>
        </li>
        </ul>
    
  </div>
</nav>


<!-- CARUSSEL AUTOMATICO -->
<div class="bg-light  ">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="https://dynamic-yield.linio.com//api/scripts/8767555/images/729d98adfed7__nuevos_usuarios_-_CO_Todo_a_menos.jpg"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="//i.linio.com/cms/db9e976a-82ba-11ea-848a-1ea4d6a3f68d.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://dynamic-yield.linio.com//api/scripts/8767555/images/22a800bab5f84__BB_green_day_cmr.jpg" class="d-block w-100" alt="...">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-----------------------------------CONTENIDO--------------------------------------->
      

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

<!--- Lins Bootstrap --->
    <script src="js/jquery-3.5.0.min.js">  </script>
    <script src="js/bootstrap.min.js">  </script>
</body>
</html>