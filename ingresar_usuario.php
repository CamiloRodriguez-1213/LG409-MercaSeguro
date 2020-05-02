<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>Inicio</title>
    
</head>
<body>
    
    <div id="header-index" ><!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

    </div><!--Fin Header: Primera parte de la pagina-->
    
    <div class="contenedor">
    <form class="ingresar_usuario"  action="guardar_nuevo_usuario.php" method="post">
    <div >    
        <h1>Para continuar ingresa tu correo o usuario</h1>
        
            <input  type="email" name="email" required placeholder="Email">
            <input  type="password" id="password" required name="password" placeholder="Contraseña" size="40"><br>
            <br>
            <tr>
                <td><button class="btn btn-outline-primary" onclick="location='index.php'" >Crear cuenta</button></td>
                <td><button class="btn btn-primary"  >Crear cuenta</button></td>
                
            </tr><br><br>
            <h4>O Ingresa con</h4>
            <br>
            <ul>
                
            <div class="pos-faces">
                <li class="pos-face"><i class="fab fa-facebook-f"></i></li>
                 <li class="pos-face"><i class="fab fa-twitter"></i></li>
                <li class="pos-face"><i class="fab fa-google"></i></li>
            </div>
       
        
      </ul>
        </div> 
        
    </form>
    <script src="popup.js"></script>
</body>
</html>