<?php 
    include('includes/db.php');
    SESSION_START();
        if(isset($_SESSION['id'])){
          $id_sesion=$_SESSION['id'];
        }else{
          $id_Sesion=0;
        }
    if(isset($_GET['estado']) == TRUE)
    {
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){$est = "inactivo";
        }else{$est = "activo";}
        $sql = "UPDATE productos set estado='$es' WHERE id='$id_sesion'";
    }else
    {
        
        $producto = $_POST["nombre"];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $id_categoria_producto=$_POST['cbx_subcategoria'] ;
        $imagen_producto=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        
        if(isset($id) == false)
        {
            $estado = "activo";
            $sql = "insert into productos(nombre_producto,descripcion_producto,precio,id_categoria_producto,imagen_producto,id_usuarios,estado) 
          values('$producto','$descripcion','$precio','$id_categoria_producto','$imagen_producto','$id_sesion','$estado')";
        
        }else
        {
             $sql= "UPDATE productos set estado='$estado',nombre_producto='$producto',descripcion_producto='$descripcion',precio='$precio',id_categoria_producto='$categoria', imagen='$imagen_producto', id_usuarios='$id_usuarios'  where id='$id_sesion'";
        
        }
    }
    DB::query($sql);
    header('Location: mis_productos.php');
    ?>