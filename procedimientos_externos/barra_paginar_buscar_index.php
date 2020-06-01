<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <!-- Cuando el numero de pagina sea menor a 1 se desactivara la opcion de anterior -->
      <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
        <!-- Cuando seleccione el boton de siguiente se restara uno al numero de pagina -->
        <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>&busqueda=<?php echo $busqueda ?>" tabindex="-1" aria-disabled="true">
          Anterior
       
        </a>
      </li>
      <!-- Imprimimos el numero de paginas -->
      <?php for ($i = 0; $i < $mostrar_paginas; $i++) : ?>
        <!-- Dependiendo de la pagina que seleccione se marcara como activado -->
        
        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
          <!-- Mostramos el numero de paginas -->
          
          <a class="page-link" href="index.php?pagina=<?php echo $i + 1 ?>&busqueda=<?php echo $busqueda ?>">
            <?php echo $i + 1 ?>
          </a>
        </li>
      <?php endfor ?>
      <!-- Cuando el numero de pagina sea mayor a el numero de paginas se desactivara la opcion de siguiente -->
      <li class="page-item <?php echo $_GET['pagina'] >= $mostrar_paginas ? 'disabled' : '' ?>">
        <!-- Cuando seleccione el boton de siguiente se sumara uno al numero de pagina -->
        <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] + 1 ?>&busqueda=<?php echo $busqueda ?>" tabindex="-1" aria-disabled="true">Siguiente</a>
      </li>
    </ul>
  </nav>