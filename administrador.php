<?php
    include('includes/verify_install.php');
    include('includes/db.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="complementos/inicio.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
    <nav class="navbar navbar-expand navbar-light bg-warning sticky-top">
      
      <h1><a class="navbar-brand " href="#">MercaSeguro</a></h1>
      <?php  
 
      // SESSION_UNSET();
        SESSION_START();
        if(isset($_SESSION['id'])){
          $ides=$_SESSION['id'];
        }else{      
        $ides=0;
       }
    ?>

      <ul class="navbar-nav  mr-auto">
      <form class="form-inline my-2 my-lg-0">
      <li class="nav-item dropdown"><input class="form-control mr-sm-2" type="text" placeholder="Search"></li>
      <li class="nav-item dropdown"><button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button></li>
          
        </form>
      </ul>
        </nav>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
  <ul class="navbar-nav  mr-auto">
          
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
            <a class="nav-link" href="#">Ofertas de la semana</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mis ventas</a>
          </li>
        
        </ul>
        <ul class="navbar-nav mr-auto">
        <?php
                   $nombre='';
                   $apellido='';
                  if($ides>0){
                  $sql="SELECT * FROM usuarios ";
                  $result= DB::query($sql);
                  while($mostrar= mysqli_fetch_array($result)){
                  if($ides==$mostrar['id']){
                    $nombre=$mostrar['nombre'];
                    $apellido=$mostrar['apellido'];
                  }
             }  
            }
            else{
              $nombre='Crea tu cuenta';
              
              $apellido='Crea tu cuenta';

            }
          ?>
        <li class="nav-item"><i class="material-icons mt-2">person</i></li>
        <li class="nav-item dropdown" id='dmenu'>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
        <?php echo $nombre; echo "  ";echo $apellido?>
        </a>
        <div class="dropdown-menu" id="navn" style="background-color: white ;padding: 22px 0;" aria-labelledby="navbarDropdown">
    
       
          <a class="dropdown-item" href="#"><i class='far fa-credit-card'></i> Compras</a>
          <a class="dropdown-item" href="#">Ventas</a>
          <a class="dropdown-item" href="#">Mis Datos</a>
          <a class="dropdown-item" href="#">Seguridad</a>
          
          <a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
        </div>
        </li>
        <li class="nav-item">
       
            <a class="nav-link" href="#">Mis compras</a>
          </li>
        
        </ul>
    
  </div>
</nav>
  <title>Inicio</title>
   
</head>
<body>
  
    

</body>
</html>
