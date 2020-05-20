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
  
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
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
    
    <div class="contenedor ">
    <form class="ingresar_usuario"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
   
        <h1>Para continuar ingresa tu correo o usuario</h1>

<!-- Inicio de campos Email y Contraseña -->
        <div class="container ">
            <div class="row">
                
                <div class="col">
                        <div class="form-group ">
                        <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
                        <input class="form-input" type="text" name="email" required autocomplete="on" placeholder="Email" size="40">
                        </div>
                </div>

                <div class="col">
                        <div class="form-group ">
                            <label class="col-form-label col-form-label-lg" for="inputLarge"> </label>
                            <input class="form-input" type="password" id="password" required autocomplete="on" name="password" placeholder="Contraseña" size="40" >
                        </div>
                </div>
            </div>

            
            <button class="btn btn-primary btn-lg" name="login" type="submit" onclick="Habilitar()";>Ingresar</button>

        </div>
<!-- FIN de botones Enviar y Regresar -->


        
        
    <?php
    if(isset($_POST['login'])){
        $email="";
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
