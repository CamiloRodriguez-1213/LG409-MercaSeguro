
<?php 
       include('includes/db.php');
       
       SESSION_START();
        if(isset($_SESSION['id'])){
          $ides=$_SESSION['id'];
        }else{
          $ides=0;
        }
      
       $sql="SELECT * FROM productos ";
       $result= DB::query($sql);
      
      if(isset($_GET['estado']) == TRUE){
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){
            $es = "inactivo";
        }else{
            $es = "activo";
        }
        $sql = "UPDATE productos set estado='$es' WHERE id='$id'";
      }else{

    $id=$_POST["id"];
    $estado=$_POST["estado"];
    $producto = $_POST["nombre"];
    $categoria=$_POST['categorias'] ;
    $valor=$_POST['precio'];
    
    $caracteristica=$_POST['descripcion'];
    $img=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
        if(isset($id)==false){
          $estado = "activo";
          $sql = "insert into productos(nombre,id_categoria_producto,precio,descripcion,imagen,id_usuarios,estado) 
          values('$producto','$categoria','$valor','$caracteristica','$img','$ides','$estado')";

          if(DB::query($sql)){
           
            
            /* echo "<script>
                        alert('El producto se registro correctamente');
                        window.location= 'mis_productos.php'
                        </script>";
                        die; */
          }else{
             
         /*  echo "<script>
                      alert('Error al guardar el producto');
                      window.location= 'mis_productos.php'
                      </script>";
                      die; */
        }
        }else{
            $sql= "UPDATE productos set  estado='$estado',nombre='$producto',precio='$valor', imagen='$img',descripcion='$caracteristica',id_categoria_producto='$categoria'  where id='$id'   ";
            if(DB::query($sql)){
           
            
              echo "<script>
                          alert('El producto se edito correctamente');
                          window.location= 'mis_productos.php'
                          </script>";
                          die;
            }else{
               
              echo "<script>
                          alert('Error al Editar el producto');
                          window.location= 'editar_producto.php'
                          </script>";
                          die;
            }
          }
     
      }

      DB::query($sql);
      header('Location: mis_productos.php');
   
   
   
      
 
  
?>

