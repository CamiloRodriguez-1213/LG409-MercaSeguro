<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/inicio.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <title>Inicio</title>
    <?php  

      
      // SESSION_UNSET();
        SESSION_START();
        if(isset($_SESSION['id'])){
          $ides=$_SESSION['id'];
        }else{
          $ides=0;
        }
  ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    
</head>
<body background=" ">
  
<header class="encabezado"><!-- principal barra navegacion -->

    <div id="header-index" ><!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>
    
    <li class="cerrar-sesion"><a href="logout.php">Cerrar sesión</a></li>
    


            <form class="form-search" action="" method="GET" role="search" >

                <input type="text" class="search-input-index" aria-label="Ingresa lo que quieras encontrar" name="as_word" placeholder="Buscar productos, marcas y más…" maxlength="120" autofocus="" autocapitalize="off" autocorrect="off" spellcheck="false" autocomplete="off" >
                
                <button type="submit" class="btn btn-warning" >

                <div role="img" aria-label="Buscar" class="nav-icon-search"  >
                        <svg class="bi bi-search " width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor"      xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.                      415z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113    0z"   clip-rule="evenodd"/>
                        </svg>
                    </div>
                    
                </button>
            </form>     
        
        
        <div class="row " ><!--Menu desplegable-->
            <ul class=" nav-index-1 nav-index-2-esp">
                <li><a href="">Categorias &#8744; </a>
                    <ul class="mini-menu-config" >
                        <a></a>
                        <a href="">Vehículos</a>
                        <li><a href="">Tecnología</a>
                            <ul>
                            <a href="">Tecnología</a>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Historial</a></li>
                <li><a href="">Tiendas Oficiales</a></li>
                <li><a href="">Ofertas de la semana</a></li>
                <li><a href="">Vender</a></li>
                <li><a href="">Ayuda/PQR</a></li>
            </ul>

            <ul class="nav-categs "  >
                    <li class="esp "><a href="crear_usuario.php">Crear tu cuenta</a></li>
                    <li><a href="ingresar_usuario.php">Ingresa</a></li>
                <li><a href="#">Mis compras</a></li>
                </ul>
            
            </div><!--Fin Menu desplegable-->
aaa
        </div><!--Fin Header: Primera parte de la pagina-->
bbb
</header>
ccc

<!---------------------------------------------CONTENIDO 1 ----------------------------------------------->

<!-- CARUSSEL AUTOMATICO -->
<div class="bg-light  ">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="https://dynamic-yield.linio.com//api/scripts/8767555/images/356e07b3a9249__nuevos_usuarios_-_CO_Los_mejor_calificados.jpg"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="//i.linio.com/cms/db9e976a-82ba-11ea-848a-1ea4d6a3f68d.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://dynamic-yield.linio.com//api/scripts/8767555/images/729d98adfed7__nuevos_usuarios_-_CO_Todo_a_menos.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://dynamic-yield.linio.com//api/scripts/8767555/images/22a800bab5f84__BB_green_day_cmr.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!---------------------------------------------CONTENIDO 2 ----------------------------------------------->

<P><!-- texto dentro de DESCUENTOS 10% --></P>
    <div class=" alert alert-primary mb-4  "> <center><h1 style="color: rgb(5, 54, 160);"><b> DESCUENTOS DESDE EL 10% </b></h1> </center> </div>
      
    
    <!-- Fila 1 de PRODUCTOS  -->
    <div class="container">
      <div class="row " >
                <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
                  <img src="https://www.muycanal.com/wp-content/uploads/2018/10/Apple.jpg"   height="135px" class="card-img-top" alt="OO">
                  <div class="card-body">
                    <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI Y NO TENER MASPROBLMAS </h6>
                  <p class="card-text-success">$ 120.000</p>
                    <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
                  </div>
                </div>

                <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSOU8C5yL6ADcDo0tXk4TkaE755FTwhPsGl4fhFHd7voKSpMq4X&usqp=CAU" height="135px" class="card-img-top" alt="OO">
                  <div class="card-body">
                    <h6 class="card-title "> COMPUTADOR ACER NITRO 5 16RAM 1TB 128GB SOLIDO Y GTX1060 4GB</h6>
                  <p class="card-text">$ 120.000</p>
                    <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
                  </div>
                </div>

                <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
                  <img src="https://ep00.epimg.net/tecnologia/imagenes/2013/02/27/actualidad/1361997174_154923_1361997392_noticia_normal.jpg" height="135px" class="card-img-top" alt="OO">
                  <div class="card-body">
                    <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI</h6>
                  <p class="card-text">$ 120.000</p>
                    <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
                  </div>
                </div>

                <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
                  <img src="https://static.turbosquid.com/Preview/2019/05/01__01_52_22/TS_ORS_Preview.jpgA8C07399-402B-45C9-B3C8-625B5AB7FA2AZoom.jpg" height="135px" class="card-img-top" alt="OO">
                  <div class="card-body">
                    <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI </h6>
                  <p class="card-text">$ 120.000</p>
                    <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
                  </div>
                </div>

                <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
                  <img src="https://www.consumer.es/wp-content/uploads/2019/07/img_novedades-ipad3-1.jpg" height="135px" class="card-img-top" alt="OO">
                  <div class="card-body">
                    <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI</h6>
                  <p class="card-text">$ 120.000</p>
                    <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
                  </div>
                </div>
      </div>
    </div>  
      

    
    
    
<!-- UNA IMAGEN DICE NAVEGA A VELOCIDADES... PRODUCTOS PRINCIPALES --><br>
<div class="container ">
  <img src="https://intermediary-i.linio.com/cms/9473a844-4dea-11ea-a302-9212766c6bec.webp" class="d-block w-100" alt="...">
</div><br>


<!-- SEGUNDA FILA DE PRODUCTOS PRINCIPALES -->
<div class="container">
  <div class="row " >
            <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
              <img src="https://www.muycanal.com/wp-content/uploads/2018/10/Apple.jpg"   height="135px" class="card-img-top" alt="OO">
              <div class="card-body">
                <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI Y NO TENER MASPROBLMAS </h6>
              <p class="card-text-success">$ 120.000</p>
                <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
              </div>
            </div>

            <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSOU8C5yL6ADcDo0tXk4TkaE755FTwhPsGl4fhFHd7voKSpMq4X&usqp=CAU" height="135px" class="card-img-top" alt="OO">
              <div class="card-body">
                <h6 class="card-title "> COMPUTADOR ACER NITRO 5 16RAM 1TB 128GB SOLIDO Y GTX1060 4GB</h6>
              <p class="card-text">$ 120.000</p>
                <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
              </div>
            </div>

            <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
              <img src="https://ep00.epimg.net/tecnologia/imagenes/2013/02/27/actualidad/1361997174_154923_1361997392_noticia_normal.jpg" height="135px" class="card-img-top" alt="OO">
              <div class="card-body">
                <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI</h6>
              <p class="card-text">$ 120.000</p>
                <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
              </div>
            </div>

            <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
              <img src="https://static.turbosquid.com/Preview/2019/05/01__01_52_22/TS_ORS_Preview.jpgA8C07399-402B-45C9-B3C8-625B5AB7FA2AZoom.jpg" height="135px" class="card-img-top" alt="OO">
              <div class="card-body">
                <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI </h6>
              <p class="card-text">$ 120.000</p>
                <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
              </div>
            </div>

            <div class="card btn-light ml-4" data-toggle="modal" data-target="#exampleModalCenter" style="width: 12.3rem;">
              <img src="https://www.consumer.es/wp-content/uploads/2019/07/img_novedades-ipad3-1.jpg" height="135px" class="card-img-top" alt="OO">
              <div class="card-body">
                <h6 class="card-title ">LIMPIEZA PARA TU HOGAR SI O SI</h6>
              <p class="card-text">$ 120.000</p>
                <!-- <a href="#" class="btn btn-primary ">Comprar</a> -->
              </div>
            </div>
  </div>
</div>  


<!-- BOTON DE PRUEBA VENTANA EMERGENTE AL DAR CLICK EN UN PRODUCTO 
 <br> Button trigger CON VENTANA<BR>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  PRUEBA COMPRA
</button>
-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalCenterTitle">NOMBRE PRODUCTO...</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">

        <!-- Carrusel de vista previa -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" >
              <img src="img/img-1.jpg" class="d-block w-100 " alt="..." height="300px"  >
            </div>
            <div class="carousel-item">
              <img src="img/img-2.jpg" class="d-block w-100 " alt="..." height="300px">
            </div>
            <div class="carousel-item">
              <img src="img/img-3.jpg" class="d-block w-100" alt="..." height="300px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        DESCRIPCION:<br>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta).
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="rutaAqui.com"><button type="button" class="btn btn-primary" href>Comprar</button></a>
      </div>
    </div>
  </div>
</div>








<!-- PAGINACION AL FINAL DE LA WEB -->
<br><br><br>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Atras</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>
</nav>






<!-- HR O LINEA DE SEPARACION... -->
<div class="container mb-1">
  
</div>




<!-- FOOTER O PIE DE PAGINA... (linea gris Separador )-->
<hr>
<footer class="text-muted  ">
  <div class="alert alert-primary">
    <p class="float-right">
      <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a>

      <!-- BOTON DE SUBIR A PAG DE INICIO -->
      <a href="#" class="col-md-4 quantity-icon-wrapper hidden-sm-down">
        <span class="icon icon-padding">
          <svg class="bi bi-chevron-double-up" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 3.707 2.354 9.354a.5.5 0 11-.708-.708l6-6z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 7.707l-5.646 5.647a.5.5 0 01-.708-.708l6-6z" clip-rule="evenodd"/>
          </svg>
        </span>
      </a>
      

    </p>
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Diseño web utilizando © Bootstrap, Php, Css y Html </font></font></p>
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Importante </font></font><a href="asas.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visite  click aqui</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tambien puedes usar el  </font></font><a href="sdsds.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> link 2</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>
  </div>
</footer>





<!-- fin contenido -->
</div>



    <script src="js/jquery-3.5.0.min.js">  </script>
    <script src="js/bootstrap.min.js">  </script>
</body>
</html>
