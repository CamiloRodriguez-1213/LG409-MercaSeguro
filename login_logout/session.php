<?php
include("../includes/db.php");
class SE{
// Estableciendo la conexion a la base de datos
//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos

public static function my_sesion(){
    
    
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];

// SQL Query para completar la informacion del usuario


$sql = "SELECT email,id FROM usuarios WHERE email = '$user_check'" ;
$result=DB::query($sql);

while($mostrar= mysqli_fetch_array($result)){
    
        $login_session_user =$mostrar['email'];
        $login_session_id =$mostrar['id'];
        
}
if(!isset($login_session_user) && !isset($login_session_id)){

    header('Location: ../index.php'); // Redirecciona a la pagina de inicio
    }


 
}


}




?>