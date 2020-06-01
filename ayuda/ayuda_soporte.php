<?php
include "../includes/verify_install.php";

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

<?php include('../accesorios/navbar_plus.php') ?>

</head>
<body>
    

    <!--- Editar Form paso a paso -->
    <div class="container ">
        <form class="vender_producto " id="regiration_form" action="../crear_producto.php" method="post" enctype="multipart/form-data">
            <!-- <h2> VISTA PREVIA DEL PRODUCTO </h2> -->
            <h5> Hola Duban Ruales </h5> 
            <h2 class="search-bar__subtitle"><b>¿Con qué podemos ayudarte?</b></h2> <br><br>


            <div class="d-none d-sm-none d-md-none d-lg-block"><!-- inicio reglas solo pc -->
            
            <div class="row ml-1 mr-1"><!-- inicio todo row  -->
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><b>¿Que es MercaSeguro?</b> </a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><b>¿Cómo crear una cuenta?</b> </a>
        <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><b>¿Cómo crear un Producto?</b></a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><b>¿Cómo comprar un producto?</b> </a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

      <a class="list-group-item list-group-item-action" id="list-compra-list" data-toggle="list" href="#list-compra" role="tab" aria-controls="compra"><b>¿Cómo pagar tu compra?</b> </a>
      <a class="list-group mb-1"></a><!-- Separador de recuadros -->

    </div>
  </div>

  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <!-- Enlace del video 1 -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-sNWKbnaFkg" allowfullscreen></iframe></div>
      </div>

      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <!-- Enlace del video2 -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-sNWKbnaFkg" allowfullscreen></iframe></div>
        </div>

      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          <!-- Enlace del video 3 -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-sNWKbnaFkg" allowfullscreen></iframe></div>
        </div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
          <!-- Enlace del video 4 -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-sNWKbnaFkg" allowfullscreen></iframe></div>
        </div>

        <div class="tab-pane fade" id="list-compra" role="tabpanel" aria-labelledby="list-compra-list">
          <!-- Enlace del video 5 -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-sNWKbnaFkg" allowfullscreen></iframe></div>
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
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab"><b>¿Que es MercaSeguro?</b></a><div class="mb-2" ></div>
  
  
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab"><b>¿Cómo crear una cuenta?</b></a><div class="mb-2" ></div>

  <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab"><b>¿Cómo crear un Producto?</b></a><div class="mb-2" ></div>

  <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab"><b>¿Cómo comprar un producto?</b></a><div class="mb-2" ></div><br>

  <div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-sNWKbnaFkg" allowfullscreen></iframe></div></div>
  <div class="tab-pane" id="profile" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QK-Z1K67uaA" allowfullscreen></iframe></div></div>
  <div class="tab-pane" id="messages" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gpG9QRV9gTk" allowfullscreen></iframe></div></div>
  <div class="tab-pane" id="settings" role="tabpanel"><div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/L6X0PqIWfzQ" allowfullscreen></iframe></div></div>
</div>
</div>

</div>
    
  </div>

  
</div><!-- final todo del row -->
            
        </div><!-- fin reglas solo ANDROID -->




</body>

</html>
 