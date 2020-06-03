<?php
include('../includes/verify_install.php');
include('../includes/db.php');
include('../login_logout/login.php');
if (isset($_SESSION['id'])) {
    /* echo ($_SESSION['id']); */
    $id_sesion=$_SESSION['id'];
  } else {
    header("location: ../registry_user_login/ingresar_usuario.php");
    session_destroy();
  }

//  $result= mysqli_query($con,$sql);

?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="../complementos/inicio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top row-12 sm-12 md-4">

  
<h5><a class="navbar-brand ml-5" href="../index.php">MercaSeguro </a></h5>
  <ul class="navbar-nav ml-4 mr-2">
  
  <form action="../index.php?pagina=1" class="form-inline my-2 my-lg-0" method="GET">
        <div class="row">
          <div class="input-group">
              <input class="form-control" type="text" name="busqueda" id="busqueda" value="<?php if (isset($_GET['busqueda'])) { echo $_REQUEST['busqueda']; }?>"  placeholder="Busca tus productos">
              <input class="form-control" hidden type="text" name="pagina" id="pagina" value="1"  placeholder="Busca tus productos">
              <span class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" >
                      <i class="fa fa-search"></i>
                  </button>
              </span>
          </div>
        </div>
          
        </form>
        
  </ul>
  <?php include '../accesorios/navbar_global.php' ?>
</head>

<body>
    <div>
    
        <div class="container d-block" >
        <br><br>
            <h1>Seleccione Categoria</h1>
            <br><br><br><br>
            <div class="row justify-content-center" >
                <button class="card btn-light justify-content-center" onclick="location='formularios_productos/form_productos.php'" style="width: 13rem; height:220px">
                    <div class="card-body ml-2">
                    <i class='fas fa-tshirt' style='font-size:120px'></i>
                    <br><br><h6 class="card-title "><b>PRODUCTOS</b></h6>
                    </div>
                </button>

                <button class="card btn-light justify-content-center" onclick="location='formularios_productos/form_servicios.php'" style="width: 13rem; height:220px">
                    <div class="card-body ml-1">
                    <i class="fa fa-handshake-o" style="font-size:120px"></i>
                    <br><br>
                        <h6 class="card-title "><b>SERVICIOS</b></h6>
                    </div>
                </button>

                <button class="card btn-light justify-content-center" onclick="location='formularios_productos/form_vehiculos.php'" style="width: 13rem; height:220px">
                    <div class="card-body ml-4">
                    <i class='fas fa-car' style='font-size:120px'></i>
                    <br><br><h6 class="card-title "><b>VEHICULOS</b></h6>
                    </div>
                </button>

                <button class="card btn-light justify-content-center" onclick="location='formularios_productos/form_inmuebles.php'" style="width: 13rem; height:220px">
                    <div class="card-body ml-4">
                    <i class='far fa-building' style='font-size:120px'></i>
                    <br><br>
                        <h6 class="card-title "><b>INMUEBLES</b></h6>
                    </div>
                    
                </button>


            </div>
        </div>


        </form>
</body>

</html>