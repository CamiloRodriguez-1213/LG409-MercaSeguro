<?php
   
     /* Procedimiento para paginacion */
     $sql = "SELECT * FROM productos";
           
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
           $sql_paginas = "SELECT * FROM productos LIMIT $inicio_res,$num_x_pag";
           $result_paginas = DB::query($sql_paginas);


?>