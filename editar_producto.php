<?php
    include('includes/verify_install.php');
     include('includes/db.php');


       

    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql = "select * from productos where id= $id";
   
    $producto = DB::query($sql);
    
    $producto = mysqli_fetch_object($producto);
  

    if($producto == false){
        echo "El usuario no existe";
        die;
    }
     
 
 
?>



<!doctype html>
<html lang="es">
<head>
<title>MIS PRODUCTOS PARA LA VENTA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
    <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   


</head>
<body>
<form class="login_db" action="crear_producto.php" method="post"enctype="multipart/form-data">
            
    <input type="hidden" name="id" value="<?= $producto->id ?>">
          
               
            <input type="text" name="nombre" required placeholder="Nombre del producto" value="<?= $producto->nombre ?>">
                <div class="input">
                <div class="form-group">
                <input type="text" name="descripcion"  class="descrip" placeholder="Descripcion del producto" value=" <?=$producto->descripcion?>">
                
               
                </textarea>
                </div>      
             </div>

                
                </div>
         
            <input type="text" name="precio"  placeholder="Valor del producto"value="<?= $producto->precio ?>" ><br><br>
           
            <div class="input">
            <div class="form-group">
             <label for="exampleFormControlSelect1">Categoria Del Producto</label> <br>
              <select class="form-control" name="categorias" id="exampleFormControlSelect1" >
              <option value="">seleccione una categoria</option>
              <option value="1" >Arte</option>
              <option value="2">Alimentos</option>
              <option value="3">Cuidado Personal</option>
              <option value="4">Celulares y telefonos</option>
              <option value="5">Computacion</option>
              <option value="6">Electrodomesticos</option>
              <option value="7">Deportes</option>
              <option value="8">Tecnologia</option>
              <option value="9">Musica y peliculas</option>
              <option value="10">Otras categorias</option> 
              
             </select>
             </div>
            </div>
            <div class="imge">
               <input type="file" name="imagen" id="exampleDropdownFormEmail2">

                     <?php 
                   
                     $img= DB::query($sql);
                     while($mostrar= mysqli_fetch_array($img)){?>
                      <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>"/>
                      
                      <style>
                            .img{
                              
                                position: relative;
                                top:-10px;
                                left: 27px;
                                padding: 2px;
                                width: 80px;
                                height: 100px;
                                border-radius:10px;
                                border-color:blue;
                            }
                     </style>
                    
                    
                      <?php
                  }
               ?>
                   
                
                 </div>

                 <?php  if($producto->estado == "activo"){  ?>
                        <label for="">Activo</label>
                        <input type="radio" name="estado" value="activo" checked>
                        <label for="">Inactivo</label>
                        <input type="radio" name="estado" value="inactivo">
                 <?php  }else{  ?>
                        <label for="">Activo</label>
                        <input type="radio" name="estado" value="activo" >
                        <label for="">Inactivo</label>
                        <input type="radio" name="estado" value="inactivo" checked>
                    <?php  }  ?>
                      <button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>
   
    </form>
             </div>
     </body>
</html>