<?php
include('../includes/verify_install.php');
include('../includes/db.php');
include('../login_logout/login.php');
if (isset($_SESSION['id'])) {
    $id_sesion = $_SESSION['id'];
} else {
    header("location: ../index.php");
    session_destroy();
}   
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Last-Modified" content="0">
  <title>Mostrar Ventane Modal de forma Automático</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <style>

  </style>
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
<?php
    $sql = "SELECT * FROM usuarios WHERE id='$id_sesion'";
    $result = DB::query($sql);
    while ($mostrar = mysqli_fetch_array($result)) {
        $nombre_usuario = $mostrar['nombre_usuario'];
        $apellido_usuario = $mostrar['apellido_usuario'];
        $email = $mostrar['email'];
        $password = $mostrar['password'];
        $numero_celular = $mostrar['celular'];
        $numero_whatsapp = $mostrar['whatsapp'];
        $ciudad = $mostrar['ciudad'];
        $direccion = $mostrar['direccion'];
        

    };

    ?>
  <!-- Inicio formulario Crear usuario -->
  <div class="container" style="max-width: 700px;">
    <div class="crear_usuario " >
      <input type="text" hidden name="actualizar_producto_usuario">
      <h1>Datos personales</h1>

      <div class="container">
        <div class="row">
          <div class="col ">
          <small><h6><b>Nombres y apellidos</b></h6></small>
            <?php echo $nombre_usuario.' '.$apellido_usuario ?>
          </div>
          
          <div class="col ">
          <small><h6><b>Correo electrónico </b></h6></small>
            <?php echo $email ?>
          </div>
        </div>
        
        <div class="row">

          <div class="col "><br>
          <small><h6><b>Número celular </b></h6></small>
            <?php echo $numero_celular ?>
          </div>
          <div class="col "><br>
          <small><h6><b>Número Whatsapp </b></h6></small>
            <?php echo $numero_whatsapp ?>
          </div>


        </div>
        <div class="row">

          <div class="col "><br>
          <small><h6><b>Ciudad </b></h6></small>
            <?php echo $ciudad ?>
          </div>
          <div class="col "><br>
          <small><h6><b>Dirección </b></h6></small>
            <?php echo $direccion ?>
          </div>


        </div>
        <div class="row mt-3"><br>

          <div class="col ">

            <button class="btn btn-primary custom" name="login" type="button" onclick="window.location.href = document.referrer; return false;" tabindex="" ;>Regresar</button>
            <button class="btn btn-danger " name="login" type="button" onclick="location.href='update_usuario.php'" tabindex="" ;>Cambiar datos personales </button>
            
          
          </div>
          




        </div>

      </div>

    </div>
    
  </div>



</body>

</html>
