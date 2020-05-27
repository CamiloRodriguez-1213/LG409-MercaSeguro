<?php
include('includes/db.php');

$id=$_REQUEST['id'];


 $sql="delete from productos  where id='$id' ";
 
 $result= DB::query($sql);

 header('Location: mis_productos.php');
   

?>