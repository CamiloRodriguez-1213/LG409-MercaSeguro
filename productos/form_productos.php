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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflcv97xo/www-widgetapi.js" async=""></script>
	<script language="javascript" src="../js/jquery-3.5.1.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
	<style type="text/css">
		#regiration_form fieldset:not(:first-of-type) {
			display: none;
		}
	</style>
	<script languaje="javascript">
		$(document).ready(function() {
			$("#cbx_categoria").change(function() {
				/* Reinicia el select */
				

				$("#cbx_categoria option:selected").each(function() {
					id_categoria = $(this).val();
					$.post("getSubcategoria.php", {
						id_categoria: id_categoria
					}, function(data) {
						$("#cbx_subcategoria").html(data);
					});
				});
			})
		});
		
		
	</script>

</head>

<body style="background-color: #ebebeb;" >
	<div id="header-index">
		<!--Header: Primera parte de la pagina-->
		<div><a class="nav-logo" href="../administrador.php" tabindex="2">Mercado Libre Colombia - Donde comprar y vender de todo</a></div>

	</div>
	<!--Fin Header: Primera parte de la pagina-->




	<!--- Form paso a paso -->
	<div class="container " style="max-width: 500px">
		<form class="vender_producto" id="regiration_form" action="../crear_producto.php" method="post" enctype="multipart/form-data">

			<fieldset><br>
				<h2>Paso 1: Text</h2>
				<div class="container ">
					<div class="form-group mt-3"><br><br>
						<input type="text" class="form-input" name="nombre" style="width: 14rem; height:35px" required placeholder="Nombre del producto">
						
						
					</div>
					<div class="form-group"><br><br>
						
						<textarea class="form-input" name="descripcion"  style="width: 14rem; height:55px" placeholder="Describe tu producto"></textarea>
					</div>
				</div><br>
				<input type="button" class="next btn btn-primary" value="Siguiente" id="regt" />
			</fieldset>


			<fieldset><br>
				<?php
				$sql = "SELECT id, nombre_cat_producto FROM categorias_productos";

				$result = DB::query($sql);

				?>
				<h2> Paso 2: Text</h2>
				<div class="form-group"><br>
				
				<label>$<input type="text" class="form-input" name="precio" style="width: 14rem;" placeholder="Valor del producto"></label><br><br>
				
				</div>
				<div class="form-group ">
					<div class="row justify-content-center align-items-center">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Categoria Del Producto</label> <br>
							<select class="form-control " name="cbx_categoria" id="cbx_categoria">

								<option value="">Seleccionar Categoria</option>
								<?php while ($mostrar = $result->fetch_assoc()) { ?>
									<option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre_cat_producto']; ?></option>
								<?php } ?>

								
							</select>
							<br>
							<select class="form-control" name="cbx_subcategoria" id="cbx_subcategoria">
							<option value="">Seleccionar Categoria</option>
							</select>
						</div>
					</div>
				</div><br><br>
				<input type="button" name="previous" class="previous btn btn-secondary" value="Atras" />
				<input type="button" name="next" class="next btn btn-primary" value="Siguiente" />
			</fieldset>

			<fieldset><br><br>
				<h2>Paso 3: Text</h2>
				
				<div class="form-group">
					<div class="imge justify-content-center"><br>
					<div id="imagePreview" ></div><br>
					<label for="file-upload" class="custom-file-upload">
					
						<i class="fa fa-cloud-upload"></i> Subir archivo
					</label>
					
					<input  type="file" aling name="imagen" id="file-upload" accept="image/*"/>
					
					</div>
					
				</div><br>
				<input type="button" name="previous" class="previous btn btn-secondary" value=" Atras" />
				<input type="submit" name="submit" class="submit btn btn-primary" value=" Publicar " id="regt" />
				<!--<button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>-->
				
			</fieldset>
			<br><br><br>
		</form>
	</div>
</body>

</html>
ul.li>list*4>lipsum4


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
(function(){
	function filePreview(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#imagePreview').html("<img  src='"+e.target.result+"' height='135px' class='img-prev' />");
			}
			reader.readAsDataURL(input.files[0]);
		}
		
	}
	$('#file-upload').change(function(){
			filePreview(this);
		}
		);
})();
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


<!-- 
<br><br><br><br><br><br>





<form class="vender_producto" id="regiration_form" action="crear_producto.php" method="post" enctype="multipart/form-data">




	</div>
	<br>
	</div>
</form> -->