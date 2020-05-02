<?php
    include('includes/verify_install.php');
    include('includes/db.php');  
    
    $sql = "select * from usuarios";
    
    $result = DB::query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/inicio.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <title>Inicio</title>
    
</head>
<body>
    
    <div id="header-index" ><!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>
        <div >
            <form class="form-search" action="" method="GET" role="search" >

                <input type="text" class="search-input-index" aria-label="Ingresa lo que quieras encontrar" name="as_word" placeholder="Buscar productos, marcas y más…" maxlength="120" autofocus="" autocapitalize="off" autocorrect="off" spellcheck="false" autocomplete="off" >
                
                <button type="submit" class="btn btn-primary" >

                    <div role="img" aria-label="Buscar" class="nav-icon-search"></div>
            
                </button>
            </form>     
        </div>
        <div class="mini-header-index-2" ><!--Menu desplegable-->
            <ul class="nav-index-1 nav-index-2-esp ">
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
            <div >
                <ul class="nav-categs" >
                    <li class="esp"><a href="crear_usuario.php">Crear tu cuenta</a></li>
                    <li><a href="ingresar_usuario.php">Ingresa</a></li>
                    <li><a href="">Mis compras</a></li>
                </ul>
            </div>
            
        </div><!--Fin Menu desplegable-->
        
        
    </div><!--Fin Header: Primera parte de la pagina-->
       
</body>
</html>
