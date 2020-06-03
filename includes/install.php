<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflcv97xo/www-widgetapi.js" async=""></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
<?php include '../accesorios/navbar_plus.php' ?>
    <title>Iniciar Sesion</title>
    <?php
    if (isset($_POST["host"])) {
        //Escribir en el archivo config las variables de conexión
        $file = fopen("config.php", "w");

        fwrite($file, "<?php" . PHP_EOL);
        fwrite($file, "define('HOST', '" . $_POST['host'] . "');" . PHP_EOL);
        fwrite($file, "define('USER', '" . $_POST['user'] . "');" . PHP_EOL);
        fwrite($file, "define('PASSWORD', '" . $_POST['password'] . "');" . PHP_EOL);
        fwrite($file, "define('DB', '" . $_POST['db'] . "');" . PHP_EOL);
        fwrite($file, "?>");

        fclose($file);

        echo "Creando archivo de conexión";

        //Importando la base de datos
        $sql = file_get_contents('db.sql');

        include('db.php');

        if (DB::getConnection()->multi_query($sql)) { ?>
            <h1 class="ok">Se ejecuto la importación correctamente</h1>
        <?php
            unlink('install.php');
            header('Location: ../index.php');
            //header( "Refresh:3; url=install.php", true, 303);
        } else { ?>
            <h1 class="bad">No se ha podido importar la base de datos, verifique los errores</h1>
    <?php
        }

        die;
    }
    ?>

</head>

<body>
    <form class="login_db" action="install.php" method="post">
        <h1>Base De Datos</h1>
        <h4>Para el correcto funcionamiento del sistema llena la siguiente información:</h4>
        <div>
            <input type="text" class="form-input2" name="host" required placeholder="Host">

            <input type="text" class="form-input2" name="user" required placeholder="User">

            <input type="password" class="form-input2" name="password" placeholder="Password">

            <input type="text" class="form-input2" name="db" required placeholder="Database">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Ingresar">

        <div>

        </div>
    </form>
</body>

</html>