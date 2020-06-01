<?php
include('../includes/db.php');
include('../includes/verify_install.php');
include('../login_logout/login.php');
$sql='SELECT * FROM usuarios';
DB::query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilo_inicio.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <title>MercaSeguro</title>
    
    <?php include '../accesorios/navbar_plus.php' ?>
</head>
<body>
    <?php while ($a <= 10) {
        # code...
    } ?>
    <div class="container">
    <div class="row justify-content-md-center">

<div class="col-md-auto my-4">

    <div class="form-group"><br>
        <small>
            <h6><b>Nombre de tu producto</b></h6>
        </small>
        
    </div>
</div>

<div class="col-md-auto my-4">
    <div class="form-group"><br>
        <small>
            <h6><b>Precio</b></h6>
        </small>
        <b>$ </b><input type="text" class="form-input2 infor" name="precio_producto" style="width: 14rem;" placeholder="Valor del producto">

    </div>
</div>

</div>
    </div>
</body>
</html>