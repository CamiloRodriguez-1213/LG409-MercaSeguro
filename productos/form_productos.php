<?php
include('../includes/verify_install.php');
include('../includes/db.php');
$sql = "SELECT * FROM producto ";
$result = DB::query($sql);

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style type="text/css">
    #regiration_form fieldset:not(:first-of-type) {
      display: none;
    }
  </style>


</head>

<body>
  <div id="header-index">
    <!--Header: Primera parte de la pagina-->
    <div><a class="nav-logo" href="../administrador.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

<<<<<<< HEAD
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
=======
  </div>
  <!--Fin Header: Primera parte de la pagina-->




  <!--- Form paso a paso -->
  <div class="container ">


    <form id="regiration_form" novalidate action="../crear_producto.php" method="post">
      <fieldset>
        <div class="btn-group dropright">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropright
          </button>
          <div class="dropdown-menu">
            <button class="dropdown-item" type="button">Action</button>
            <div class="dropdown-menu">
            <button class="dropdown-item" type="button">Action</button>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
          </div>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
          </div>
        </div>
        <!-- <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" /> -->
      </fieldset>
    </form>

</body>

</html>



<script type="text/javascript">
  $(document).ready(function() {
    var current = 1,
      current_step, next_step, steps;
    steps = $("fieldset").length;
    $(".next").click(function() {
      current_step = $(this).parent();
      next_step = $(this).parent().next();
      next_step.show();
      current_step.hide();
      setProgressBar(++current);
    });
    $(".previous").click(function() {
      current_step = $(this).parent();
      next_step = $(this).parent().prev();
      next_step.show();
      current_step.hide();
      setProgressBar(--current);
    });
    setProgressBar(current);
    // Change progress bar action
    function setProgressBar(curStep) {
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
        .css("width", percent + "%")
        .html(percent + "%");
    }
  });
</script>

<!--Fin Header: Primera parte de la pagina-->


<!-- <form class="vender_producto" id="regiration_form" action="crear_producto.php" method="post" enctype="multipart/form-data">
    <div class="andes-list__item-primary">Accesorios para Vehículos</div>
    <div class="andes-list__item-primary">Agro</div>
    <div class="andes-list__item-primary">Alimentos y Bebidas</div>
    <div class="andes-list__item-primary">Animales y Mascotas</div>
    <div class="andes-list__item-primary">Antigüedades y Colecciones</div>
    <div class="andes-list__item-primary">Arte, Papelería y Mercería</div>
    <div class="andes-list__item-primary">Bebés</div>
    <div class="andes-list__item-primary">Belleza y Cuidado Personal</div>
    <div class="andes-list__item-primary">Boletas para Espectáculos</div>
    <div class="andes-list__item-primary">Cámaras y Accesorios</div>
    <div class="andes-list__item-primary">Celulares y Teléfonos</div>
    <div class="andes-list__item-primary">Computación</div>
    <div class="andes-list__item-primary">Consolas y Videojuegos </div>
    <div class="andes-list__item-primary">Deportes y Fitness</div>
    <div class="andes-list__item-primary">Electrodomésticos</div>
    <div class="andes-list__item-primary">Electrónica, Audio y Video</div>
    <div class="andes-list__item-primary">Herramientas y Construcción</div>
    <div class="andes-list__item-primary">Hogar y Muebles</div>
    <div class="andes-list__item-primary">Industrias y Oficinas</div>
    <div class="andes-list__item-primary">Instrumentos Musicales</div>
    <div class="andes-list__item-primary">Juegos y Juguetes</div>
    <div class="andes-list__item-primary">Libros, Revistas y Comics</div>
    <div class="andes-list__item-primary">Música, Películas y Series</div>
    <div class="andes-list__item-primary">Recuerdos, Piñatería y Fiestas</div>
    <div class="andes-list__item-primary">Relojes y Joyas</div>
    <div class="andes-list__item-primary">Ropa y Accesorios</div>
    <div class="andes-list__item-primary">Salud y Equipamiento Médico</div>
    <div class="andes-list__item-primary">Otras categorías</div> -->
<!--------------------------------------->
<!--   <div class="andes-list__item-primary">Acc. para Carros y Camionetas</div>
    <div class="andes-list__item-primary">Acc. para Motos y Cuatrimotos</div>
    <div class="andes-list__item-primary">Acc. y Repuestos Náuticos</div>
    <div class="andes-list__item-primary">Acc. y Repuestos para Camiones</div>
    <div class="andes-list__item-primary">Audio para Vehículos</div>
    <div class="andes-list__item-primary">GNV</div>
    <div class="andes-list__item-primary">Herramientas</div>
    <div class="andes-list__item-primary">Limpieza de Vehículos</div>
    <div class="andes-list__item-primary">Llantas</div>
    <div class="andes-list__item-primary">Navegadores GPS para Vehículos</div>
    <div class="andes-list__item-primary">Performance</div>
    <div class="andes-list__item-primary">Repuestos Carros y Camionetas</div>
    <div class="andes-list__item-primary">Repuestos de Maquinaria Pesada</div>
    <div class="andes-list__item-primary">Repuestos Motos y Cuatrimotos</div>
    <div class="andes-list__item-primary">Rines</div>
    <div class="andes-list__item-primary">Seguridad Vehicular</div>
    <div class="andes-list__item-primary">Service Programado</div>
    <div class="andes-list__item-primary">Tuning</div>
    <div class="andes-list__item-primary">Otros</div>
    
  </form> -->
<!--  <div class="btn-group dropright">

    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Accesorios para Vehículos
    </button>
    <div class="dropdown-menu">
      <div class="btn-group dropright">

        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accesorios para Vehículos
        </button>
        <div class="dropdown-menu">
          <div class="btn-group dropright">

            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Accesorios para Vehículos
            </button>
            <div class="dropdown-menu">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
>>>>>>> 2a4fd21952661e06be7d865e6b24cbf274a196e9
