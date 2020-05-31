<?php
    include('../includes/db.php');
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
    if (isset($_POST['id_producto']) && isset($_POST['nombre_producto'])) {
        $id_producto_editar = $_POST['id_producto'];
        $nombre_producto = $_POST['nombre_producto'];
        $descripcion_producto = $_POST['descripcion_producto'];
        $precio_producto = $_POST['precio_producto'];
        $subcategoria_producto = $_POST['subcategoria_producto'];
        $sql = "UPDATE productos set nombre_producto='$nombre_producto',descripcion_producto='$descripcion_producto',precio='$precio_producto'
         WHERE id='$id_producto_editar'";
        DB::query($sql);
        header('Location: ../productos/mis_productos.php');
    }

/* 
    echo $id_producto_editar;
        echo '<br>';
        echo $nombre_producto;
        echo '<br>';
        echo $precio_producto;
        echo '<br>';
        echo $categoria_producto;
        echo '<br>';
        echo $subcategoria_producto;
        echo '<br>';
        
        echo $descripcion_producto; */
    ?>