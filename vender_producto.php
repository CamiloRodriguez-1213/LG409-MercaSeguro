<?php
    include('includes/verify_install.php');
     include('includes/db.php');
     $sql="SELECT * FROM producto ";
     $result= DB::query($sql);
     
  //  $result= mysqli_query($con,$sql);
 
?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Last-Modified" content="0">
    <link rel="stylesheet" type="text/css" href="complementos/crear_ingresar.css">
  
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   


</head>
<body>
        
        <form class="login_db" action="crear_producto.php" method="post"enctype="multipart/form-data">
            
            
          
               
                <input type="text" name="nombre" required placeholder="Nombre del producto">
                    <div class="input">
                    <div class="form-group">
                  
                   <input type="text" name="descripcion" class="descrip" placeholder="Especificacion">
                    </div>      
                 </div>

                    
                    </div>
             
                <input type="text" name="precio"  placeholder="Valor del producto"><br><br>
               
                <div class="input">
                <div class="form-group">
                 <label for="exampleFormControlSelect1">Categoria Del Producto</label> <br>
                  <select class="form-control" name="categorias" id="exampleFormControlSelect1">
                  <option value="">seleccione una categoria</option>
                  <option value="1">Arte</option>
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
                   <input type="file" name="imagen" id="exampleDropdownFormEmail2" accept="image/*">
                 </div>
                 <button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>
         </div>
        <br>
        
    
        
       
      </form>

    </body>
</html>