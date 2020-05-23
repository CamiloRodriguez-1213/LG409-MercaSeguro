<?php
include('../includes/verify_install.php');
include('../includes/db.php');
$sql = "SELECT * FROM usuarios ";
$result = DB::query($sql);


?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">


  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Inicio</title>
    <script type="text/javascript">
        function Habilitar() {
            var email = document.getElementById("email");
            var pasword = document.getElementById("password");

            if (email.value != null && email.value != '' && pasword.value != null && pasword.value != '' && pasword.value == "[A-Z]{3}[0-9]{4}") {
                document.location.href = index.php;
            };
        }
    </script>

    <?php include '../accesorios/navbar_plus.php' ?>
</head>

<body>

    <div></div>
    <div class="container" style="max-width: 700px ;position:relative;">

        <form class="ingresar_usuario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">


            <h4><strong>Para continuar ingresa tu correo y contraseña</strong></h4>


            <div class="container ">
                <div class="row">
                    <div class="col ">
                        <div class="form-group ">

                            <input class="form-input2 infor " type="text" name="email" required autocomplete="on" placeholder="Email" size="30">
                        </div>
                    </div>
                    <div class="col ">
                        <div class="form-group  ">

                            <input class="form-input2 infor" type="password" id="password" required autocomplete="on" name="password" placeholder="Contraseña" size="30">
                        </div>
                    </div>


                </div>



                <button class="btn btn-primary btn-lg" name="login" type="submit" onclick="Habilitar()" ;>Ingresar</button>

            </div>
            <!-- FIN de botones Enviar y Regresar -->




            <?php
            if (isset($_POST['login'])) {
                $email = "";
                $email = $_POST['email'];


                $password = md5($_POST["password"]);

                $ide = "";

                $usu = 0;
                $reg = 0;
                while ($mostrar = mysqli_fetch_array($result)) {
                    // $nombres=$_POST["id"];

                    if ($email == $mostrar['email'] && $password == $mostrar['password']) {
                        $reg++;
                        $ide = $mostrar['id'];
                    } else {
                        $usu++;
                    }
                }
                session_start();
                $_SESSION['id'] = $ide;

                if ($reg > 0) {


                    header('Location: ../index.php?pagina=1');
                } else {

                    echo '<div class="alert alert-danger">Usuario incorrecto </div>';
                    //ingreso erroneo
                    header('Refresh: 3; Location: ingresar_usuario.php');
                    session_destroy();
                }
            }

            ?>

            </table>

        </form>
    </div>

</body>

</html>