  <?php
  include('../includes/verify_install.php');
  include('../includes/db.php');
  ?>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <title>Crear Cuenta </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <script type="text/javascript">
      function Habilitar() {
        var nombre = document.getElementById("nombre");
        var apellido = document.getElementById("apellido");
        var email = document.getElementById("email");
        var pasword = document.getElementById("password");

        if (nombre.value != null && nombre.value != '' && apellido.value != null && apellido.value != '' && email.value != null && email.value != '' && pasword.value != null && pasword.value != '' && pasword.value == "[A-Z]{3}[0-9]{4}") {
          document.location.href = index.php;
        };
      }
    </script>
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

    

    <!-- Inicio formulario Crear usuario -->
    <div class="container" style="max-width: 700px;">
      <form class="crear_usuario " action="guardar_nuevo_usuario.php" method="post">
        
        <h1>Crear Nuevo Usuario</h1>

        <div class="container">
          <div class="row">
            <div class="col "><br>
            <h6><b>Nombre<a style="color: red;"> * </a></b></h6>
              <input class="form-input3 infor" type="text" name="nombre" autofocus id="nombre" required autocomplete="on" placeholder="Nombre" tabindex="1" size="30">
            </div>
            <div class="col "><br>
            <h6><b>Apellido<a style="color: red;"> * </a></b></h6>
              <input class="form-input3 infor" type="text" name="apellido" value="" id="apellido" required autocomplete="on" placeholder="Apellido" tabindex="2" size="30">
            </div> 


          </div>
          <div class="row">

            <div class="col "><br>
            <h6><b>Correo electronico<a style="color: red;"> * </a></b></h6>
              <input class="form-input3" type="email" name="email" id="email" required autocomplete="on" placeholder="Ingrese su correo" tabindex="3" size="30">
            </div>
            <div class="col "><br>
            <h6><b>Contraseña<a style="color: red;"> * </a></b></h6>
              <input class="form-input3" type="password" id="password" name="password" required autocomplete="on" tabindex="4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="El campo contraseña debe contener un mínimo 
    de 8 caracteres, un máximo de 20, letras, (minúsculas y MAYÚSCULAS) y Números " placeholder="Contraseña" size="30">
            </div>


          </div>
          <div class="row">

            <div class="col "><br>
            <h6><b>Numero Celular<a style="color: red;"> * </a></b></h6>
              <input class="form-input3" type="tel" name="celular" required autocomplete="on" placeholder="Número de Celular" tabindex="5" size="30">
            </div>
            <div class="col "><br>
            <h6><b>Nombre Whatsapp<a style="color: red;"> * </a></b></h6>
              <input class="form-input3" type="tel" name="whatsapp" required autocomplete="on" placeholder="Número de Whatsapp" tabindex="6" size="30">
            </div>


          </div>
          <div class="row">

            <div class="col "><br>
            <h6><b>Ciudad<a style="color: red;"> * </a></b></h6>
              <input class="form-input3" type="text" name="ciudad" required autocomplete="on" placeholder="Ciudad Actual" tabindex="7" size="30">
            </div>
            <div class="col "><br>
            <h6><b>Dirección<a style="color: red;"> * </a></b></h6>
              <input class="form-input3" type="text" name="direccion" required autocomplete="on" placeholder="Dirección" tabindex="8" size="30">
            </div>


          </div>
          <div class="row mt-3">

            <div class="col ">

              <button class="btn btn-primary custom" name="login" type="button" onclick="window.location.href = document.referrer; return false;" tabindex="" ;>Regresar</button>
              <button class="btn btn-primary custom" name="login" type="submit" onclick="Habilitar()" tabindex="" ;>Crear</button>
            </div>



          </div>

        </div>

      </form>
    </div>



  </body>

  </html>
