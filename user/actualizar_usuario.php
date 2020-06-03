<?php
include '../includes/db.php';
include('../login_logout/login.php');
    if (isset($_SESSION['id'])) {
      $id_sesion=$_SESSION['id'];
      } else {
      header("location: ../registry_user_login/ingresar_usuario.php;");
      session_destroy();
      }
if (isset($_POST['actualizar_usuario'])) {
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $password=sha1($_POST['password']);
    $celular=$_POST['celular'];
    $whatsapp=$_POST['whatsapp'];
    $ciudad=$_POST['ciudad'];
    $direccion=$_POST['direccion'];
    

    $sql="SELECT id, nombre_usuario FROM usuarios WHERE id='$id_sesion' AND password ='$password'";
    $result =DB::query($sql);
    $result_consulta = $result->num_rows;
    if ($result_consulta==1) {

        $sql = "UPDATE usuarios SET nombre_usuario='$nombre',
        apellido_usuario='$apellido',celular='$celular',
        whatsapp='$whatsapp',ciudad= '$ciudad',direccion='$direccion'
        WHERE id='$id_sesion'";
    
    DB::query($sql);
    $_SESSION['login_user_sys']=$nombre.' '.$apellido; // Iniciando la sesion
    header('Location: mis_datos.php');
    
    }elseif($result_consulta!=1)
    {
        echo 'Hay un error, usuarios repetidos';
    }

}
if (isset($_POST['cambiar_password'])) {
    $password_old=sha1($_POST['password_old']);
    $password_new=sha1($_POST['password_new']);
    $sql="SELECT id,password FROM usuarios WHERE id='$id_sesion' AND password='$password_old'";
    $result =DB::query($sql);
    $result_consulta = $result->num_rows;

    if ($result_consulta==1) {

        $sql = "UPDATE usuarios SET password='$password_new'
        WHERE id='$id_sesion'";
    
    DB::query($sql);
    session_destroy();
    header('Location: ../registry_user_login/ingresar_usuario.php');
    
    }elseif($result_consulta!=1)
    {
        echo 'Hay un error, más de un usuario';
    }
    
}
?>