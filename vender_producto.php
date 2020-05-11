<?php
include('includes/verify_install.php');
include('includes/db.php');
$sql = "SELECT * FROM producto ";
$result = DB::query($sql);

//  $result= mysqli_query($con,$sql);

?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="header-index">
        <!--Header: Primera parte de la pagina-->
        <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

    </div>
    <!--Fin Header: Primera parte de la pagina-->
    <div>
    
        <div class="container d-block" >
        <br><br>
            <h1>Seleccione Categoria</h1>
            <br><br><br><br>
            <div class="row justify-content-center" >

                <button class="card btn-light justify-content-center" onclick="location='productos/form_productos.php'" style="width: 13rem; height:220px">
<<<<<<< HEAD
=======

>>>>>>> 2a4fd21952661e06be7d865e6b24cbf274a196e9
                    <div class="card-body ml-2">
                    <i class='fas fa-tshirt' style='font-size:120px'></i>
                    <br><br><h6 class="card-title "><b>PRODUCTOS</b></h6>
                    </div>
                </button>

                <button class="card btn-light justify-content-center" onclick="location='productos/form_servicios.php'" style="width: 13rem; height:220px">
                    <div class="card-body ml-1">
                    <i class="fa fa-handshake-o" style="font-size:120px"></i>
                    <br><br>
                        <h6 class="card-title "><b>SERVICIOS</b></h6>
                    </div>
                </button>

                <button class="card btn-light justify-content-center" onclick="location='productos/form_veiculos.php'" style="width: 13rem; height:220px">
                    <div class="card-body ml-4">
                    <i class='fas fa-car' style='font-size:120px'></i>
                    <br><br><h6 class="card-title "><b>VEHICULOS</b></h6>
                    </div>
                </button>

                <button class="card btn-light justify-content-center" onclick="location='productos/form_inmuebles.php'" style="width: 13rem; height:220px">
                    <div class="card-body ml-4">
                    <i class='far fa-building' style='font-size:120px'></i>
                    <br><br>
                        <h6 class="card-title "><b>INMUEBLES</b></h6>
                    </div>
                    
                </button>


            </div>
        </div>


        </form>
</body>

</html>