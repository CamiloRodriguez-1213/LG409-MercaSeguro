<?php
include('../includes/verify_install.php');
include '../login_logout/login.php'; // Includes Login Script
include('../includes/db.php');

if (isset($_SESSION['login_user_sys'])) {
    header("location: ../index.php");
} else {
    session_destroy();
}

?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <title>Ingreso</title>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top row-12 sm-12 md-4">

  
<h5><a class="navbar-brand ml-5" href="../index.php">MercaSeguro </a></h5>
  <ul class="navbar-nav ml-4 mr-2">
  
  
  <form action="../index.php?pagina=1" class="form-inline my-2 my-lg-0" method="GET">
        <div class="row">
          <div class="input-group">
              <input class="form-control" type="text" name="busqueda" id="busqueda" value="<?php if (isset($_GET['busqueda'])) { echo $_REQUEST['busqueda']; }?>"  placeholder="Busca tus productos">
              <input class="form-control" hidden type="text" name="pagina" id="pagina" value="1"  placeholder="Busca tus productos">
              <span class="input-group-append">
                  <button class="btn btn-outline-secondary"  type="submit" >
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
<div class="container" style="max-width: 700px;" >
    <form class="crear_usuario"  action="../login_logout/login.php" method="post">

    


            <h4 class="my-5"><strong>Para continuar ingresa tu correo y contraseña</strong></h4>


            <div class="container my-4 ">
                <div class="row">
                    <div class="col ">
                        <div class="form-group ">

                            <input class="form-input2 infor " type="text" name="username" required autocomplete="on" placeholder="Email" size="30">
                        </div>
                    </div>
                    <div class="col ">
                        <div class="form-group  ">

                            <input class="form-input2 infor" type="password" id="password" required autocomplete="on" name="password" placeholder="Contraseña" size="30">
                        </div>
                    </div>


                </div>



                <button class="btn btn-primary btn-lg my-4" name="submit" type="submit" onclick="Habilitar()" ;>Ingresar</button><br>
                <a href="crear_usuario.php" style="text-decoration: none;">Crea tu cuenta</a>
            </div>

            <!-- FIN de botones Enviar y Regresar -->
            <?php echo $error;
            if (isset($_SESSION['fallo_login'])) {
                echo '<div class="alert alert-danger">Usuario incorrecto </div>';
            }
            ?>

        </form>
    </div>


</body>

</html>