<?php
    require ('../../includes/db.php');
    $id_categoria = $_POST['id_categoria'];

    $sql = "SELECT id, nombre_sub_producto FROM sub_cat_productos WHERE id_cat_producto = '$id_categoria'";
    
    $result = DB::query($sql);
    $html = '<option value="0">Seleccionar Categoria</option>';
    while($mostrar= $result->fetch_assoc()){
      $html.= "<option value='".$mostrar['id']."'>".$mostrar['nombre_sub_producto']."</option>";
      
      }
    echo $html;
?>