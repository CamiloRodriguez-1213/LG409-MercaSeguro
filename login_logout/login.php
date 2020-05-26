<?php


session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username y $password

// Estableciendo la conexion a la base de datos

include("../includes/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
// Para proteger de Inyecciones SQL 
$username=$_POST['username'];
$password=$_POST['password'];

$password=sha1($password);//Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php

$sql = "SELECT * FROM usuarios";
$result=DB::query($sql);
$counter = 0;
while($mostrar= mysqli_fetch_array($result)){
	
	
	 if($username==$mostrar['email'] && $password == $mostrar['password']){
			 $counter++;
			 $nombre=$mostrar['nombre_usuario'];
	$apellido=$mostrar['apellido_usuario'];
			 
	 }
	 
	 
 }
if ($counter==1){
		$_SESSION['login_user_sys']=$nombre.' '.$apellido; // Iniciando la sesion
		$_SESSION['id']=$id_sesion;
		header("location: ../index.php"); // Redireccionando a la pagina profile.php
	
	
} else {
	$_SESSION['fallo_login'] = 'fallo inicio de sesion, datos incorrectos';//Creamos una nueva variable de sesion
    header("Location: ../registry_user_login/ingresar_usuario.php");
    exit();


}
}
}

?>