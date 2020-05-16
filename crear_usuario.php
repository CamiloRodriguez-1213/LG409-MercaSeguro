<?php
include('includes/verify_install.php');

?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Last-Modified" content="0">
  <title>Mostrar Ventane Modal de forma Automático</title>
  <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
</head>

<body>
  <div id="header-index">
    <!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

  </div>
  <!--Fin Header: Primera parte de la pagina-->

  <!-- Inicio formulario Crear usuario -->
  <div class="container">
  <form class="crear_usuario " action="guardar_nuevo_usuario.php" method="post">

<h1>Crear Nuevo Usuario</h1>

<div class="container  ">
<ul class="list-group list-group-horizontal-sm">
  
</ul>
  <li class="list-group-item">
  <input class="form-input2" type="text" name="nombre" autofocus id="nombre" required autocomplete="on" placeholder="Nombre" tabindex="1" size="40">
  <input class="form-input2" type="text" name="apellido" value="" id="apellido" required autocomplete="on" placeholder="Apellido" tabindex="2" size="40">



  </li>
  <li class="list-group-item">
    
    <input class="form-input2" type="email" name="email" id="email" required autocomplete="on" placeholder="Email" tabindex="3" size="40">
    <input class="form-input2" type="password" id="password" name="password" required autocomplete="on" tabindex="4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="El campo contraseña debe contener un mínimo 
  de 8 caracteres, un máximo de 20, letras, (minúsculas y MAYÚSCULAS) y Números " placeholder="Contraseña" size="40">

  </li>
  <li class="list-group-item">
  <input class="form-input2" type="tel" name="celular" required autocomplete="on" placeholder="Número de Celular" tabindex="5" size="40">
  <input class="form-input2" type="tel" name="whatsapp" required autocomplete="on" placeholder="Número de Whatsapp" tabindex="6" size="40">
  

  </li>
  <li class="list-group-item">
  <input class="form-input2" type="text" name="ciudad" required autocomplete="on" placeholder="Ciudad Actual" tabindex="7" size="40">
<input class="form-input2" type="text" name="direccion" required autocomplete="on" placeholder="Dirección" tabindex="8" size="40">

  </li>
</ul>

  <br>
  <button class="btn btn-primary btn-lg" name="login" type="submit" onclick="Habilitar()" tabindex="" ;>Ingresar</button>

</div>

</form>
  </div>

  

</body>

</html>