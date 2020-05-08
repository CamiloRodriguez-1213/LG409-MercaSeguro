<?php
    include('includes/verify_install.php');
     include('includes/db.php');
     $sql="SELECT * FROM usuarios ";
     $result= DB::query($sql);
     
 
?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
    <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>Inicio</title>
    <script type="text/javascript">
   
    function Habilitar()
    {
        var email = document.getElementById("email");
        var pasword = document.getElementById("password");
        
        if( email.value != null && email.value != '' && pasword.value != null && pasword.value != '' && pasword.value == "[A-Z]{3}[0-9]{4}"){
            document.location.href=administrador.php;
        };
    }
    
        
        
    </script>
</head>
<body>
<div id="header-index" ><!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

    </div><!--Fin Header: Primera parte de la pagina-->
    
    <div class="contenedor">
    <form class="ingresar_usuario"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
   
     
        <h1>Para continuar ingresa tu correo o usuario</h1>
        <table>
            <tr>
                <td><input  type="text" name="email" required placeholder="Email"></td>
                <td><input  type="password" id="password" required name="password" placeholder="Contraseña" size="40"><br></td>
            </tr>
            <br>
            <tr>
             
            <td><input type="submit" name="login" class="btn btn-primary btn-sn" onclick="Habilitar();"></td>
             
            <td><input  class="btn btn-primary" value="Regresar" onclick="location='index.php'"></td>
            <tr align="center">
            <td>
            
            <br><br>
            <h4>O Ingresa con</h4>
            <br>
            <ul>
            <div class="pos-faces">
                <li class="pos-face"><i class="fab fa-facebook-f"></i></li>
                 <li class="pos-face"><i class="fab fa-twitter"></i></li>
                <li class="pos-face"><i class="fab fa-google"></i></li>
            </div>
            </ul>
                
            
       
        
            </td>
             </tr>
             
         </tr>
            
        
    <?php
    if(isset($_POST['login'])){
        $emaili="";
        $email= $_POST['email'];
       
       
        $password=md5($_POST["password"]);
   
        $ide="";
        
        $usu=0;
        $reg=0;
        while($mostrar= mysqli_fetch_array($result)){
           // $nombres=$_POST["id"];
           
            if($email==$mostrar['email'] && $password == $mostrar['password']){
                    $reg++;
                    $ide=$mostrar['id'];
                   
            }
            else{     
                    $usu++;
            }
        }  
        session_start();
        $_SESSION['id']=$ide;

        if($reg > 0){
            
          
           header('Location: administrador.php');
        
        }else{
        
            echo '<div class="alert alert-danger">Usuario incorrecto </div>';
           //ingreso erroneo
           header('Refresh: 3; Location: ingresar_usuario.php');
           
            
        }
    }
   
    ?>
          
        </table>     
     
    </form>
</div>


</body>
</html>
