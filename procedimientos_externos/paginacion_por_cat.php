<!--   -->


   <?php


/* Procedimiento para paginacion */
$categoria = strtolower( $_REQUEST['categoria']);

$categoria=trim ( $categoria);
        
        $sql = "SELECT * /* nombre_cat, nombre_subcat, productos.id, nombre_producto, descripcion_producto,precio */
        FROM categorias_productos
       INNER JOIN subcategorias_productos
        ON subcategorias_productos.id_categoria = categorias_productos.id
        INNER JOIN productos ON id_categoria_producto = subcategorias_productos.id
          WHERE nombre_cat = '$categoria' OR subcategorias_productos.nombre_subcat = '$categoria'
           AND estado='activo' ";

        
           
        $result = DB::query($sql);
        /* Contamos numero de registros o filas */
        $result_consulta = $result->num_rows;
        /* echo $result_consulta; */
        /* Elegiremos cuantos resultados mostraremos */
        $num_x_pag =8 ;
        /* Divimos el numero de registros entre el numero que queremos mostrar */
        $mostrar_paginas = ($result_consulta / $num_x_pag);
        /* El resultado de esta division será el numero de paginas que se mostrarán y lo redondeamos al numero mayor con ceil */
        $mostrar_paginas = $result_consulta = ceil($mostrar_paginas);
        /* echo $mostrar_paginas; */
        $inicio_res = ($_GET['pagina'] - 1) * $num_x_pag;
        /* echo $inicio_res; */
        /* Nuestra consulta mostrara los productos del 0 al 5 */
        $sql_paginas = "SELECT * /* nombre_cat, nombre_subcat, productos.id, nombre_producto, descripcion_producto,precio */
        FROM categorias_productos
       INNER JOIN subcategorias_productos
        ON subcategorias_productos.id_categoria = categorias_productos.id
        INNER JOIN productos ON id_categoria_producto = subcategorias_productos.id
          WHERE nombre_cat = '$categoria' OR subcategorias_productos.nombre_subcat = '$categoria'
           AND estado='activo'
         LIMIT $inicio_res,$num_x_pag";
        $result_paginas = DB::query($sql_paginas);
        $result_consulta = $result->num_rows;
?>

