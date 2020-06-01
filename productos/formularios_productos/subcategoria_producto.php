<?php
    require ('../../includes/db.php');
    $id_categoria = $_POST['id_categoria'];

    $sql = "SELECT id, nombre_subcat FROM subcategorias_productos WHERE id_categoria = '$id_categoria'";
    
    $result = DB::query($sql);
    $html = '<option value="0">Seleccionar Categoria</option>';
    while($mostrar= $result->fetch_assoc()){
      $html.= "<option value='".$mostrar['id']."'>".$mostrar['nombre_subcat']."</option>";
      }
    echo $html;
?>