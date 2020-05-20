<?php 
    include('includes/db.php');
    
    SESSION_START();
    if(isset($_SESSION['id'])){
      $id_user=$_SESSION['id'];
    }else{
      $id_user=0;
    }
   
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password=md5($_POST["password"]);
        $celular = $_POST["celular"];
        $whatsapp = $_POST["whatsapp"];
        $ciudad = $_POST["ciudad"];
        $direccion = $_POST["direccion"];
        
        if(isset($id) == false)
        {
            $sql = "INSERT INTO usuarios(nombre_usuario,apellido_usuario,email,password,celular,whatsapp,ciudad,direccion) values('$nombre','$apellido','$email','$password','$celular','$whatsapp','$ciudad','$direccion')"; 
            
        
        }else
        {
            echo("Ingrese una id correcto");
        }
    
    DB::query($sql);
    header('Location: index.php');
    ?>