<?php
/* Procedimiento para paginacion */
$sql = "SELECT * FROM productos WHERE estado='$estado' AND id_usuarios='$id_sesion'";
$result = DB::query($sql);
/* Contamos numero de registros o filas */
$result_consulta = $result->num_rows;
/* echo $result_consulta; */
/* Elegiremos cuantos resultados mostraremos */
$num_x_pag =4;
/* Divimos el numero de registros entre el numero que queremos mostrar */
$mostrar_paginas = ($result_consulta / $num_x_pag);
/* El resultado de esta division será el numero de paginas que se mostrarán y lo redondeamos al numero mayor con ceil */
$mostrar_paginas = $result_consulta = ceil($mostrar_paginas);
/* echo $mostrar_paginas; */
$inicio_res = ($_GET['pagina'] - 1) * $num_x_pag;
/* echo $inicio_res; */
/* Nuestra consulta mostrara los productos del 0 al 5 */
$sql_paginas = "SELECT productos.id AS id_producto,estado,nombre_producto,descripcion_producto,precio,id_categoria_producto
           ,imagen_producto,id_usuarios,estado,subcategorias_productos.id AS id_subcategoria,nombre_subcat,categorias_productos.id 
           AS id_categoria,nombre_cat
           FROM productos 
                   INNER JOIN subcategorias_productos
                   ON productos.id_categoria_producto = subcategorias_productos.id
                   INNER JOIN categorias_productos
                   ON subcategorias_productos.id_categoria = categorias_productos.id WHERE estado='$estado' AND id_usuarios='$id_sesion' ORDER BY id_producto DESC LIMIT $inicio_res,$num_x_pag ";
$result_paginas = DB::query($sql_paginas);
?>