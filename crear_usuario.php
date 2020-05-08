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
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
   <script type="text/javascript">
   
    function Habilitar()
    {
        var nombre = document.getElementById("nombre");
        var apellido = document.getElementById("apellido");
        var email = document.getElementById("email");
        var pasword = document.getElementById("password");
        
        if(nombre.value != null && nombre.value != '' && apellido.value != null && apellido.value != '' && email.value != null && email.value != '' && pasword.value != null && pasword.value != '' && pasword.value == "[A-Z]{3}[0-9]{4}"){
            document.location.href=index.php;
        };
    }
    
        
        
    </script>
</head>
<body>
<div id="header-index" ><!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

    </div><!--Fin Header: Primera parte de la pagina-->
    
    <!-- Inicio formulario Crear usuario -->
    <form class="container crear_usuario " action="guardar_nuevo_usuario.php" method="post">
           
            <h1>Crear Nuevo Usuario</h1>

    
    <div class="container">
    <div class="row">
        <div class="col"> </div>

        <div class="col">
        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control input-sm" type="text"  name="nombre" value=""  id="nombre" required autocomplete="off" placeholder="Nombre"> 
        </div>

        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control-lg" type="email" name="email" id="email" required autocomplete="off" placeholder="Email">
        </div>

        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control-lg" type="tel" name="celular" required autocomplete="off" placeholder="Número de Celular">
        </div>

        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control-lg" type="text" name="ciudad" required autocomplete="off" placeholder="Ciudad Actual">
        </div>
        </div>

        <div class="col">
        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control-lg" type="text" name="apellido" value="" id="apellido" required autocomplete="off" placeholder="Apellido">
        </div>

        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control-lg" type="password" id="password" name="password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="El campo contraseña debe contener un mínimo 
      de 8 caracteres, un máximo de 20, letras, (minúsculas y MAYÚSCULAS) y Números " placeholder="Contraseña" size="40">
        </div>

        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control-lg" type="tel" name="whatsapp" required autocomplete="off" autocomplete="off" placeholder="Número de Whatsapp">
        </div>

        <div class="form-group ">
          <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
          <input class="form-control form-control-lg" type="text" name="direccion" required autocomplete="off" placeholder="Dirección">
        </div>
        </div>
        <div class="col"> </div>
  </div>
  



  

        <div class="row">
        <div class="col"> </div>
        <div class="col">
        <td><input type="submit" class="btn btn-primary" onclick="Habilitar();"></td>
        </div>
        

        <div class="col">
        <td><input type="submit" class="btn btn-primary" value="Regresar" onclick="location='index.php'"></td>
        </div>
        <div class="col"> </div>
  </div>

    </div>
    </form>
    


</body>
</html>