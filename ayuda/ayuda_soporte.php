<?php
include "../includes/verify_install.php";
include('../includes/db.php');
include('../login_logout/login.php');
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda MercaSeguro </title>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflcv97xo/www-widgetapi.js" async=""></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

<link rel="stylesheet" type="text/css" href="../css/editor.css"><!---PARA EDITOR DE DESCRIPCION-->

<nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top row-12 sm-12 md-4">

  
<h5><a class="navbar-brand ml-5" href="../index.php">MercaSeguro </a></h5>
  <ul class="navbar-nav ml-4 mr-2">
  
  <form action="../index.php?pagina=1" class="form-inline my-2 my-lg-0" method="GET">
        <div class="row">
          <div class="input-group">
              <input class="form-control" type="text" name="busqueda" id="busqueda" value="<?php if (isset($_GET['busqueda'])) { echo $_REQUEST['busqueda']; }?>"  placeholder="Busca tus productos">
              <input class="form-control" hidden type="text" name="pagina" id="pagina" value="1"  placeholder="Busca tus productos">
              <span class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" >
                      <i class="fa fa-search"></i>
                  </button>
              </span>
          </div>
        </div>
          
        </form>
        
  </ul>
  <?php include '../accesorios/navbar_global.php' ?>

</head>
<body>
    

    <!--- Editar Form paso a paso -->
    <div class="container ">
        <form class="vender_producto " id="regiration_form" action="../crear_producto.php" method="post" enctype="multipart/form-data">
            <!-- <h2> VISTA PREVIA DEL PRODUCTO </h2> -->
            <!-- <h5> Hola Duban Ruales </h5>  -->
            <h2 class="search-bar__subtitle"><b>¿Con qué podemos ayudarte?</b></h2> <br><br>


            <div class="d-none d-sm-none d-md-none d-lg-block"><!-- inicio reglas solo pc -->
            
            <div class="row ml-1 mr-1"><!-- inicio todo row  -->
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><b>¿Como crear una cuenta?</b> </a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><b>¿Cómo iniciar sesión?</b> </a>
        <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><b>¿Cómo crear un Producto?</b></a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><b>¿Cómo comprar un producto?</b> </a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-compra-list" data-toggle="list" href="#list-compra" role="tab" aria-controls="compra"><b> Empresa de domicilios Oficial </b> </a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

    </div>
  </div>

  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <!-- Enlace del video 1 -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VtFiHyun7m8" allowfullscreen></iframe></div>
      </div>

      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <!-- Enlace del video2 -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nNK-q_5cHcg" allowfullscreen></iframe></div>
        </div>

      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          <!-- Enlace del video 3 -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/94XyL9dJONg" allowfullscreen></iframe></div>
        </div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
          <!-- Enlace del video 4 -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/94XyL9dJONg" allowfullscreen></iframe></div>
        </div>

        <div class="tab-pane fade" id="list-compra" role="tabpanel" aria-labelledby="list-compra-list">
          <!-- Enlace del video 5 -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22495.87483560209!2d-74.10075363522787!3d4.639265472743703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaabbb5a825c41047!2sSERVIENTREGA!5e0!3m2!1ses!2sco!4v1591071481151!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>
  </div>
  
</div><!-- final todo del row -->

</div><!-- de regla solo pc -->




            
        
<div class="d-block d-sm-block d-md-block d-lg-none"><!-- inicio regla solo ANDROID -->
            <div class="row ml-1 mr-1"><!-- inicio todo row  -->
  <div class="col-12">
  <div class="row-12">
  <!-- List group -->
<div class="list-group" id="myList" role="tablist">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab"><b>¿Como crear una cuenta?</b></a><div class="mb-2" ></div>
  
  
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab"><b>¿Cómo crear un Producto?</b></a><div class="mb-2" ></div>

  <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab"><b>¿Cómo comprar un producto?</b></a><div class="mb-2" ></div>

  <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab"><b>Empresa de domicilios Oficial</b></a><div class="mb-2" ></div><br>

  <div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VtFiHyun7m8" allowfullscreen></iframe></div></div>
  <div class="tab-pane" id="profile" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/94XyL9dJONg" allowfullscreen></iframe></div></div>
  <div class="tab-pane" id="messages" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/94XyL9dJONg" allowfullscreen></iframe></div></div>
  <div class="tab-pane" id="settings" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22495.87483560209!2d-74.10075363522787!3d4.639265472743703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaabbb5a825c41047!2sSERVIENTREGA!5e0!3m2!1ses!2sco!4v1591071481151!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div></div>
</div>
</div>

</div>
    
  </div>

  
</div><!-- final todo del row -->
            
        </div><!-- fin reglas solo ANDROID -->




</body>

</html>