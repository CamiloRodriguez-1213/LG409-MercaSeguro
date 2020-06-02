<?php
    include('../includes/db.php');
    include('../login_logout/login.php');
    if (isset($_SESSION['id'])) {
      $id_sesion=$_SESSION['id'];
      } else {
      header("location: ../registry_user_login/ingresar_usuario.php;");
      session_destroy();
      }
    /* Si se envia un cambio de actualización en activo o inactivo realiza un update */
    if (isset($_POST['estado'])) {
        $estado = $_POST['estado'];
        $id_producto=$_POST['id_producto'];
        
        
        if($estado=="activo"){$estado = "inactivo";
        }else{$estado = "activo";}
        $sql = "UPDATE productos set estado='$estado' WHERE id='$id_producto'";
    
        DB::query($sql);
        header('Location: ../productos/mis_productos.php');
    }
    /* Si se envia un POST de editar hacer lo siguiente */
    if (isset($_POST['id_producto']) && (isset($_POST['actualizar_producto'])) ) {
        $id_producto_editar = $_POST['id_producto'];
        $nombre_producto = $_POST['nombre_producto'];
        $descripcion_producto = $_POST['descripcion_producto'];
        $precio_producto = $_POST['precio_producto'];
        $subcategoria_producto = $_POST['subcategoria_producto'];
        $imagen_producto=addslashes(file_get_contents($_FILES['imagen_producto']['tmp_name']));
        $sql = "UPDATE productos set nombre_producto='$nombre_producto',descripcion_producto='$descripcion_producto',id_categoria_producto='$subcategoria_producto',imagen_producto='$imagen_producto',precio='$precio_producto'
         WHERE id='$id_producto_editar'";
        DB::query($sql);
        /* header('Location: ../productos/mis_productos.php'); */
    }
    /* Si se envia un POST de crear producto hacer lo siguiente */
    if (isset($_POST['crear_producto'])) {
    $producto = $_POST["nombre"];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $id_categoria_producto=$_POST['cbx_subcategoria'] ;
    $imagen_producto=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $estado = "activo";
        $sql = "insert into productos(nombre_producto,descripcion_producto,precio,id_categoria_producto,imagen_producto,id_usuarios,estado) 
      values('$producto','$descripcion','$precio','$id_categoria_producto','$imagen_producto','$id_sesion','$estado')";
      DB::query($sql);
      header('Location: ../productos/mis_productos.php');
    
}
    if (isset($_POST['eliminar_producto'])) {
      
      
       $sql="DELETE FROM productos where id='$id_sesion' ";
       
        DB::query($sql);
      
       header('Location: ../productos/mis_productos.php');
         
    
}
    ?>
    