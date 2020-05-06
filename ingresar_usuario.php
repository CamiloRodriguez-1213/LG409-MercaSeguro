<?php
    include('includes/verify_install.php');
     include('includes/db.php');
     $sql="SELECT * FROM usuarios ";
     $result= DB::query($sql);
     
     
  //  $result= mysqli_query($con,$sql);
 
?>

<!-- <link rel="stylesheet" href="css/style_ingresar.css">   -->

<!doctype html>
<html lang="en">
<header>
    <div class="a1 container">
       <a href="index.php" class="item animated infinite pulse delay"><h1>Inicio</h1></a>
    </div>
</header>
<body>



<div class="a2 container">
<div class="row">
    
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

<div class="input justify-content-around">
    <label for="exampleDropdownFormEmail2">Correo</label>    
     <input type="text" name="email" id="gm"class="form-control" required placeholder="Gmail: ejemplo@gmail.com"  >
</div>
<div class="input justify-content-around">
    <label for="exampleDropdownFormEmail2">Password</label>
     <input type="password" name="password" id="passw" class="form-control" required placeholder="Password :"  >
</div>
<div class="inici">
    <input type="submit" name="btn1"  value="ENTRAR" id="ini2" class="btn btn-primary animated infinite pulse delay"  
    <?php
    if(isset($_POST['btn1'])){
       
        $email= $_POST['email'];
        $password=$_POST['password'];
        $ide="";
        echo "<p>correo: {$email}, contraseña: {$password} </p>";
        $usu=0;
        $reg=0;
        while($mostrar= mysqli_fetch_array($result)){
           // $nombres=$_POST["id"];
           
            if($email==$mostrar['email'] && $password == $mostrar['password'] ){
                    $reg++;
                    $ide=$mostrar['id'];
                   // $nombres = $_POST["nombres"];
                    //echo "el usuario si existe {$reg}";  
            }
            else{     
                    $usu++;
                   // echo "sin registrar {$usu}";
            }
        }  
        session_start();
        $_SESSION['id']=$ide;

        if($reg > 0){
            echo 
           //ingreso correcta
           header('administrador.php') ;
        
        }else{
            echo 
           //ingreso erroneo
           header('ingresar_usuario.php');
            
        }
    }
   
    ?>
     >
 </div>


</form>
</div>
</div>

</body>
</html>
