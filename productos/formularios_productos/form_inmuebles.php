<?php
    include('../includes/verify_install.php');
     include('../includes/db.php');
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
    <link rel="stylesheet" type="text/css" href="../complementos/crear_ingresar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
   <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>


</head>
<body>
<div id="header-index" ><!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="../index.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

</div><!--Fin Header: Primera parte de la pagina-->
    



<!--- Form paso a paso -->
<div class="container ">	
	<form class="vender_producto" id="regiration_form"   action="../crear_producto.php"  method="post" enctype="multipart/form-data">

		<fieldset><br>
			  <h2>Paso 1: Text</h2>
        <div class="container ">
        <div class="form-group mt-3"><br><br>
            <input type="text" name="nombre" style="width: 20rem; height:35px" required placeholder="Nombre del producto">
		    </div>
		    <div class="form-group"><br><br>
            <input type="text" name="descripcion" style="width: 20rem; height:35px" placeholder="Especificacion">
		    </div>
        </div><br>
			  <input type="button" name="data[password]" class="next btn btn-info"  value="Siguiente" id="regt" />
		</fieldset>


			<fieldset><br>
				  <h2> Paso 2: Text</h2>
				  <div class="form-group"><br>
              <input type="text" class="form-input" name="precio" style="width: 14rem;" placeholder="Valor del producto"><br><br>
			    </div>
			    <div class="form-group">
                <div class="input">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" >Categoria Del Producto</label> <br>
                    <select class="form-control" name="categorias"  id="exampleFormControlSelect1">
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
			    </div><br><br>
				  <input type="button" name="previous" class="previous btn btn-secondary" value="Atras" />
				  <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
			</fieldset>

			<fieldset><br><br>
				  <h2>Paso 3: Text</h2>
				  <div class="form-group">
          <div class="imge justify-content-center"><br><br><br>
                   <input type="file" aling name="imagen" id="exampleDropdownFormEmail2" accept="image/*">
                 </div>
			    </div><br><br><br>
				  <input type="button" name="previous" class="previous btn btn-secondary" value=" Atras" />
				  <input type="submit" name="submit" class="submit btn btn-success" value=" Guardar " id="regt" />
          <!--<button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>-->
			</fieldset>
      


<br><br><br>




    </body>
</html>



<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>



<br><br><br><br><br><br>





<form class="vender_producto" id="regiration_form" action="crear_producto.php" method="post" enctype="multipart/form-data">
    
    
        
                
         </div>
        <br>
</div>
</form>
-->