<nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
    <nav class="navbar navbar-expand navbar-light bg-warning sticky-top">

      <h1><a class="navbar-brand " href="index.php">MercaSeguro </a></h1>
      <?php


      ?>
      <?php

      // SESSION_UNSET();
      SESSION_START();
      if (isset($_SESSION['id'])) {
        $id_sesion = $_SESSION['id'];
        
        
      } else {
        $id_sesion = 0;
      }
      ?>

      <ul class="navbar-nav  mr-auto">
        <form action="productos/buscar_producto.php" class="form-inline my-2 my-lg-0" method="GET">
          <div class="row">
            <div class="input-group">
              <input class="form-control py-2" type="text" name="busqueda" id="busqueda" placeholder="Busca tus productos">
              <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </div>
        </form>
      </ul>
    </nav>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-block d-sm-block d-md-none"><h3 class="navbar-brand">Bienvenido</h3></div>
    <div class="collapse navbar-collapse" id="navbarColor02">
      
      <?php
        $nombre = '';
        $apellido = '';
        if ($id_sesion > 0) {
          $sql = "SELECT * FROM usuarios ";
          $result = DB::query($sql);
          while ($mostrar = mysqli_fetch_array($result)) {
            if ($id_sesion == $mostrar['id']) {
              $nombre = $mostrar['nombre_usuario'];
              $apellido = $mostrar['apellido_usuario'];
              $usuario = $nombre . " " . $apellido;
              ?>
              <ul class="navbar-nav  mr-auto">
      <div class="d-none d-sm-none d-md-block">
        <li class="nav-item dropdown" id='dmenu'>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
          </a>
          <div class="dropdown-menu" style="padding: 22px 0;" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Vehículos</a>
            <a class="dropdown-item" href="#">Tecnología</a>

            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="#">Historial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ofertas de la semana</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos/vender_producto.php">Vender</a>
        </li>
      </ul>
          <ul class="navbar-nav mr-auto">
        

        <li class="nav-item"></li>
        <li class="nav-item dropdown" id='dmenu'>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <i class="fas fa-user-circle" style='font-size:24px'></i> <?php echo $usuario; ?>


          </a>
          <div class="dropdown-menu" id="navn" style="background-color: white;" aria-labelledby="navbarDropdown">


            <a class="dropdown-item" href="#"><i class='far fa-credit-card'></i> Compras</a>
            <a class="dropdown-item" href="productos/mis_productos.php">Mis Ventas</a>
            <a class="dropdown-item" href="#">Mis Datos</a>
            <a class="dropdown-item" href="#">Seguridad</a>

            <a class="dropdown-item" href="includes/logout.php">Cerrar Sesion</a>
          </div>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="#">Mis compras</a>
        </li>

      </ul>
              <?php
            }else{
                $usuario="Crear Cuenta";
            }
            
            ?>
            
            <?php
          }
        }else{
            
        
          ?>
                <!-- Configuracion solo para computador de escritorio -->
      <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
          <ul class="navbar-nav mr-5">
      
        <li class="nav-item dropdown" id='dmenu'>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
          </a>
          <div class="dropdown-menu" style="padding: 22px 0;" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Vehículos</a>
            <a class="dropdown-item" href="#">Tecnología</a>

            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        
        
        
        
        <li class="nav-item">
          <a class="nav-link" href="#">Historial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mis compras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos/vender_producto.php">Quiero vender</a>
        </li>
      
        
          
          </ul>
          
          </div>
          <!-- Fin configuracion solo para computador de escritorio -->
          <!-- Configuracion solo para computador de escritorio -->
          <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
          <ul class="navbar-nav ml-5">
        <li class="nav-item">
          <a class="nav-link" href="registry_user_login/crear_usuario.php">Crear cuenta</a>
        </li>
        
        <li class="nav-item">
        
          <a class="nav-link" href="registry_user_login/ingresar_usuario.php">Iniciar sesión</a>
        </li>
          </ul>
          </div>
          <!-- Fin configuracion solo para computador de escritorio -->
            <!-- Configuracion solo para smarthphone -->
        <div class="d-block d-sm-block d-md-none">
          
          <ul class="navbar-nav" style="float: right">
          <li class="nav-item">
          
          <a class="nav-link" href="registry_user_login/ingresar_usuario.php">Iniciar sesión</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="registry_user_login/crear_usuario.php">Crear cuenta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Historial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mis compras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos/vender_producto.php">Quiero vender</a>
          </li>
        </ul>
            
            <ul class="navbar-nav mr-auto">
          
          
          
            </ul>
            
          
          </div>
      </div>
        
        <!-- Fin configuracion solo para smarthphone -->
          <?php
        }
        ?>
      

    </div>
  </nav>

