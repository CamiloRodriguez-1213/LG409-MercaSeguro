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
	
    
    <title>Inicio</title>
    
</head>
<body>
    
    <div id="header-index" ><!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

    </div><!--Fin Header: Primera parte de la pagina-->
    
    <div class="contenedor">
    <form class="crear_usuario"  method="get" method="post">
    <div >    
        <h1>Crear Nuevo Usuario</h1>
        
            <table>
            <tr>
                <td><input type="text"  name="nombre"  id="nombre" required placeholder="Nombre"></td>
                <td><input type="text" name="apellido" id="apellido" required placeholder="Apellido"></td>
            </tr>
            <tr>
                <td><input type="email" name="email" id="email" required placeholder="Email"></td>
                <td><input type="password" id="password" required name="password" placeholder="Contraseña" size="40"><br></td>
            </tr>
            
            
            </table>
        
            <br>
            
            <input type="submit" id="btn-abrir-popup" class="button" value="Crear" onclick="validarSoloJs()" >
            <input type="submit" class="button" onclick="location='index.php'" value="Regresar">
            
        </div> 
        <div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>Un Momento</h3>
				<h4>Llena estos datos antes de finalizar</h4>
				<table>
            
            <tr>
                <td><input type="tel" name="celular" required placeholder="Número de Celular"></td>
                <td><input type="tel" name="whatsapp" required placeholder="Número de Whatsapp"></td>
            </tr>
            <tr>
                <td><input type="text" name="Ciudad" required placeholder="Ciudad Actual"></td>
                <td><input type="text" name="direccion" required placeholder="Dirección"></td>
                
            </tr>
            
            
            </table>
            <tr ><input type="submit" class="button" value="Crear" onclick="location='index.php'"></tr>
			</div>
		</div>
	
		
    </div>
    <script src="complementos/popup.js"></script>
    </form>
    
</body>
</html>
