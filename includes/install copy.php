<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <title>Iniciar Sesion</title>
<?php 
    if(isset($_POST["host"])){
        //Escribir en el archivo config las variables de conexión
        $file = fopen("config.php", "w");

        fwrite($file, "<?php" . PHP_EOL);
        fwrite($file, "define('HOST', '" . $_POST['host'] ."');" . PHP_EOL);
        fwrite($file, "define('USER', '" . $_POST['user'] ."');" . PHP_EOL);
        fwrite($file, "define('PASSWORD', '" . $_POST['password'] ."');" . PHP_EOL);
        fwrite($file, "define('DB', '" . $_POST['db'] ."');" . PHP_EOL);
        fwrite($file, "?>");

        fclose($file);
        
        echo "Creando archivo de conexión";

        //Importando la base de datos
        $sql = file_get_contents('db.sql');

        include('db.php');

        if(DB::getConnection()->multi_query($sql)){?>
           <h1 class="ok">Se ejecuto la importación correctamente</h1>
           <?php
           unlink('install.php');
           header('Location: ../index.php');
           //header( "Refresh:3; url=install.php", true, 303);
        }else{?>
            <h1 class="bad">No se ha podido importar la base de datos, verifique los errores</h1>
            <?php
        }
        
        die;
    }
?>
    
</head>
<body>
    <div id="header-index" ><!--Header: Primera parte de la pagina-->
        <div>
            <a class="nav-logo" href="index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a>
        </div>
    </div><!--Fin Header: Primera parte de la pagina-->
    <form class="login_db" action="install.php" method="post">
    <h1>Base De Datos</h1>
    <h4>Para el correcto funcionamiento del sistema llena la siguiente información:</h4>
    <div>
        <input type="text" name="host" required placeholder="Host">

        <input type="text" name="user" required placeholder="User">

        <input type="password" name="password"  placeholder="Password">

        <input type="text" name="db" required placeholder="Database">
    </div>
        <br>
        <input type="submit" class="button" value="Crear">
        
        <div>
        
        </div>
    </form>
</body>
</html>