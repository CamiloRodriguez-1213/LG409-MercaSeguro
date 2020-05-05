<?php 
    include('includes/db.php');
   
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password=$_POST["password"];
        
            $sql = "SELECT FROM usuarios WHERE email='$email' and password='$password'"; 
            $resultado= DB::query($sql);
            $filas=mysqli_num_rows($resultado);
            if($filas>0) {
                header('Location: index.php');
            }else{echo "Error en la autenticación";}
            mysqli_free_result($resultado);
         
        
    
    
    ?>