
  <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <!-- Solo se va a mostrar en computador -->
   <div class="d-none d-sm-none d-md-none d-lg-block">
    <ul class="navbar-nav ml-4" style="float: left">
      <li class="nav-item dropdown" id='dmenu'>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <!--  -->
        <div class="dropdown-menu" style="padding: 22px 0;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" name="computacion" id="computacion" href="index.php?categoria=computacion&pagina=1">Computación</a>
          <a class="dropdown-item" name="Celulares" id="celulares" href="index.php?categoria=celulares y telefonos&pagina=1">Celulares y Teléfonos</a>
        
          <a class="dropdown-item" name="juegos" id="juegos" href="index.php?categoria=juegos y juguetes&pagina=1">Juegos y Juguetes</a>

<!--  -->
          <a class="dropdown-item" name="celleza" id="velleza" href="index.php?categoria=belleza e higiene personal&pagina=1">Belleza e Higiene Personal</a>
          <a class="dropdown-item" name="viajes" id="viajes"  href="index.php?categoria=viajes y turismo&pagina=1">Viajes y Turismo</a>

<!--  -->
          <a class="dropdown-item" name="carros" id="carros"  href="index.php?categoria=carros de coleccion&pagina=1">Carros de Colección</a>
          <a class="dropdown-item" name="motos" id="motos" href="index.php?categoria=motos&pagina=1">Motos</a>
          <a class="dropdown-item" name="maquinaria" id="maquinaria" href="index.php?categoria=maquinaria pesada&pagina=1">Maquinaria Pesada</a>

<!--  -->
          <a class="dropdown-item" name="edificios" id="edificios" href="index.php?categoria=edificios&pagina=1">Edificios</a>
          <a class="dropdown-item" name="lotes" id="lotes" href="index.php?categoria=lotes y casalotes&pagina=1">Lotes y Casalotes</a>
          <a class="dropdown-item" name="oficinas" id="oficinas" href="index.php?categoria=oficinas&pagina=1">Oficinas</a>

<!--  -->
          <a class="dropdown-item" name="otrascat" id="otrascat" href="index.php?categoria=otras categorias&pagina=1">Otras Categorias</a>
        </div>
      </li>
    </ul>
  </div>
  <!-- Fin solo se va a mostrar en computador -->
  <div class="collapse navbar-collapse " id="navbarColor02">
<!-- Solo se va a mostrar en celular -->
    <div class="d-block d-sm-block d-md-block d-lg-none">
      <ul class="navbar-nav ml-4 mr-5" style="float: left">

        <?php
        if (isset($_SESSION['login_user_sys'])) {
          $username = $_SESSION['login_user_sys'];  
        ?>



          <li class="nav-item">

            <a class="nav-link" href="registry_user_login/ingresar_usuario.php"><i class="fas fa-user-circle" style='font-size:24px'></i> <?php echo $username; ?></a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item">

            <a class="nav-link" href="registry_user_login/ingresar_usuario.php">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registry_user_login/crear_usuario.php">Crear cuenta</a>
          </li>


        <?php
        }
        ?>
        
        <li class="nav-item">
          <a class="nav-link" href="productos/mis_productos.php">Mis Productos</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Historial</a>
        </li> -->
        <li class="nav-item">
          <?php 
            if (isset($_SESSION['id'])) {?>
              
              <a class="nav-link" href="productos/vender_producto.php">Vender</a>
            <?php }else{ ?>
              <a class="nav-link" href="registry_user_login/ingresar_usuario.php">Vender</a>
              <?php
            }
          ?>
        </li>
        <?php
        if (isset($_SESSION['login_user_sys'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="login_logout/logout.php">Cerrar sesión</a>
          </li>
        <?php } ?>

      </ul>
    </div>
<!-- Fin solo se va a mostrar en celular -->


<!-- Solo se va a mostrar en computador -->
<div class="d-none d-sm-none d-md-none d-lg-block">
      <ul class="navbar-nav ml-2" >

        <li class="nav-item">
          <!-- <a class="nav-link" href="#">Historial</a> -->
        </li>
        
        <li class="nav-item d-md-none d-xl-block">
        <?php 
            if (isset($_SESSION['id'])) {?>
              
              <a class="nav-link" href="productos/vender_producto.php">Vender</a>
            <?php }else{ ?>
              <a class="nav-link" href="registry_user_login/ingresar_usuario.php">Vender</a>
              <?php
            }
          ?>
        </li>

        <li class="nav-item mr-5">
          <a class="nav-link" href="ayuda/ayuda_soporte.php"> Ayuda </a>
        </li>
       

        <?php
        if (isset($_SESSION['login_user_sys'])) {
          $username = $_SESSION['login_user_sys'];
        ?>
          
        <li class="nav-item dropdown ml-5" id='dmenu' >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <i class="fas fa-user-circle " style='font-size:24px'></i> <?php echo $username; ?>


          </a>
          <div class="dropdown-menu" style="padding: 22px 0;" aria-labelledby="navbarDropdown">



            <!-- <a class="dropdown-item" href="#"><i class='far fa-credit-card'></i> Compras</a> -->
            <a class="dropdown-item" href="productos/mis_productos.php">Mis Productos</a>
            <a class="dropdown-item" href="user/mis_datos.php">Mis Datos</a>
            <!-- <a class="dropdown-item" href="#">Seguridad</a> -->

            <a class="dropdown-item" href="login_logout/logout.php">Cerrar Sesion</a>
          </div>
        </li>
        <?php
        } else { ?>
          <li class="nav-item ml-2">

          <a class="nav-link" href="registry_user_login/ingresar_usuario.php">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registry_user_login/crear_usuario.php">Crear cuenta</a>
          </li>
        <?php } ?>
      </ul>
      
    </div>
<!-- Fin solo se va a mostrar en computador -->
