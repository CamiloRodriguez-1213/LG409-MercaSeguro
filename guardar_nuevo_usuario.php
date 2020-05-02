<?php 
    include('includes/db.php');
   
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
            $sql = "INSERT INTO usuarios(nombre,apellido,email,password,celular,whatsapp,ciudad,direccion) values('$nombre','$apellido','$email','$password','$celular','$whatsapp','$ciudad','$direccion')"; 
        
        }else
        {
            echo("Ingrese una contraseña correcta");
        }
    
    DB::query($sql);
    header('Location: index.php');
    ?>