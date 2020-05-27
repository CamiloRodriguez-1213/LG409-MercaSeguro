<?php 
    include('../includes/db.php');
    
        $id = $_POST["id"];
        $nombre_usuario = $_POST["nombre"];
        $apellido_usuario = $_POST["apellido"];
        $email = $_POST["email"];
        $password=sha1($_POST["password"]);
        $celular = $_POST["celular"];
        $whatsapp = $_POST["whatsapp"];
        $ciudad = $_POST["ciudad"];
        $direccion = $_POST["direccion"];
        
        $sql = "INSERT INTO usuarios(nombre_usuario,apellido_usuario,email,password,celular,whatsapp,ciudad,direccion) values('$nombre_usuario','$apellido_usuario','$email','$password','$celular','$whatsapp','$ciudad','$direccion')"; 
    
    DB::query($sql);
    header('Location: ../index.php');
    ?>