<?php
include('../includes/verify_install.php');
include('../includes/db.php');

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Last-Modified" content="0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo_inicio.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <title>Inicio</title>
  <?php

  $busqueda = '';
  include '../accesorios/navbar_buscar.php';
  

  ?>
</head>

<body>


  <?php
  $busqueda = strtolower($_REQUEST['busqueda']);
  if ($busqueda != null || $busqueda != '') { ?>

    <h3>Resultado
    </h3>


    <?php

    $sql = "SELECT * FROM productos";
    $result = DB::query($sql);
    $result_consulta = $result->num_rows;
    $num_x_pag = 8;
    $mostrar_paginas = ($result_consulta / $num_x_pag);
    $mostrar_paginas = $result_consulta = ceil($mostrar_paginas);
    
    $sql_paginas = "SELECT * FROM productos WHERE
    nombre_producto LIKE '%$busqueda%' OR
    descripcion_producto LIKE '%$busqueda% LIMIT 1,4";
    $result_paginas = DB::query($sql_paginas);
    ?>
    <div class="container ">
    <h1 class="my-5">Paginacion</h1>

    <div class="row justify-content-around">
      <?php
      
      while ($mostrar = mysqli_fetch_array($result_paginas)) : ?>

        <div class="contenedor  sm-12 md-4">
          <figure>

            <div class="card btn-light mr-2" style="width: 240px; height: 280px; ">
              <div class="color">
                <img class="zoom mt-3" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen_producto']) ?>" height="108rem" class="card-img-top" alt="OO">
                <br><br>
                <small>39% descuento</small>
                <h3 class="card-text-success">$ <?php echo $mostrar['precio']; ?> </h3>
                <div class="capa">
                  <p><small> <?php echo $mostrar['nombre_producto']; ?> </small> </p>
                </div>
              </div>
            </div>
          </figure>
        </div>
      <?php
      endwhile
      ?>
    </div>
  </div>
  <?php
  }else {
    echo "No se encontraron resultados";
  }


  ?>

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <!-- Cuando el numero de pagina sea menor a 1 se desactivara la opcion de anterior -->
      <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
        <!-- Cuando seleccione el boton de siguiente se restara uno al numero de pagina -->
        <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>" tabindex="-1" aria-disabled="true">
          Anterior
        </a>
      </li>
      <!-- Imprimimos el numero de paginas -->
      <?php for ($i = 0; $i < $mostrar_paginas; $i++) : ?>
        <!-- Dependiendo de la pagina que seleccione se marcara como activado -->
        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
          <!-- Mostramos el numero de paginas -->
          <a class="page-link" href="index.php?pagina=<?php echo $i + 1 ?>">
            <?php echo $i + 1 ?>
          </a>
        </li>
      <?php endfor ?>
      <!-- Cuando el numero de pagina sea mayor a el numero de paginas se desactivara la opcion de siguiente -->
      <li class="page-item <?php echo $_GET['pagina'] >= $mostrar_paginas ? 'disabled' : '' ?>">
        <!-- Cuando seleccione el boton de siguiente se sumara uno al numero de pagina -->
        <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">Siguiente</a>
      </li>
    </ul>
  </nav>
</body>

</html>