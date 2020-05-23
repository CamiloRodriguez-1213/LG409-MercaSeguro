<?php
if (!$_GET) {
  header('Location:index.php?pagina=1');
}
if ($_GET['pagina'] > $mostrar_paginas || $_GET['pagina'] <= 0) {
  header('Location:index.php?pagina=1');
}
if ($_GET['pagina'] == null) {
  header('Location:index.php?pagina=1');
}


?>