<?php 
    include('includes/db.php');
    SESSION_START();
        if(isset($_SESSION['id'])){
          $ides=$_SESSION['id'];
        }else{
          $ides=0;
        }
    if(isset($_GET['estado']) == TRUE)
    {
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){$est = "inactivo";
        }else{$est = "activo";}
        $sql = "UPDATE productos set estado='$es' WHERE id='$ides'";
    }else
    {
        
        $producto = $_POST["nombre"];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $id_categoria_producto=$_POST['categorias'] ;
        $imagen_producto=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        
        if(isset($id) == false)
        {
            $estado = "activo";
            $sql = "insert into productos(nombre,descripcion,precio,id_categoria_producto,imagen_producto,id_usuarios,estado) 
          values('$producto','$descripcion','$precio','$id_categoria_producto','$imagen_producto','$ides','$estado')";
        
        }else
        {
             $sql= "UPDATE productos set estado='$estado',nombre='$producto',descripcion='$descripcion',precio='$precio',id_categoria_producto='$categoria', imagen='$imagen_producto', id_usuarios='$id_usuarios'  where id='$ides'";
        
        }
    }
    DB::query($sql);
    header('Location: mis_productos.php');
    ?>