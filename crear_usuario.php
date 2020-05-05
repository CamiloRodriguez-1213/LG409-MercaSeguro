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
    
    
    <form class="crear_usuario" action="guardar_nuevo_usuario.php" method="post">
        <div >    
            <h1>Crear Nuevo Usuario</h1>

            <table>
                
            <tr>
                
                <td><input type="text"  name="nombre" value=""  id="nombre" required placeholder="Nombre"></td>
                <td><input type="text" name="apellido" value="" id="apellido" required placeholder="Apellido"></td>
            </tr>
            <tr>
                <td><input type="email" name="email" id="email" required placeholder="Email"></td>
                <td><input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="El campo contraseña ha de tener un mínimo 
      de 8 caracteres, un máximo de 20, letras, (minúsculas y mayúsculas) y números " placeholder="Contraseña" size="40"><br></td>
            </tr>
            <tr>
                <td><input type="tel" name="celular" required placeholder="Número de Celular"></td>
                <td><input type="tel" name="whatsapp" required placeholder="Número de Whatsapp"></td>
            </tr>
            <tr>
                <td><input type="text" name="ciudad" required placeholder="Ciudad Actual"></td>
                <td><input type="text" name="direccion" required placeholder="Dirección"></td>
                
            </tr>
            <tr>
             
                <td><input type="submit" class="btn btn-primary" onclick="Habilitar();"></td>
                
                <td><input type="submit" class="btn btn-primary" value="Regresar" onclick="location='index.php'"></td>
                
                
            </tr>
            </table>
        
    </form>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>