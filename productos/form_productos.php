<?php
include('../includes/verify_install.php');
include('../includes/db.php');
?>


<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Last-Modified" content="0">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflcv97xo/www-widgetapi.js" async=""></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	
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
<?php include('../accesorios/navbar_plus.php')?>
</head>

<body >
	<!--- Form paso a paso -->
	<div class="container" style="max-width: 500px; max-height: 700px">
		<form class="vender_producto"  id="regiration_form" action="../productos/crear_producto.php" method="post" enctype="multipart/form-data">

			<fieldset>
				<h2>Datos del producto</h2>
				<div class="container ">
					<div class="form-group mt-3"><br><br>
						<input type="text" class="form-input2 infor" name="nombre" style="width: 14rem; height:35px" maxlength="100" required placeholder="Nombre del producto">
					</div>
					<div class="form-group"><br>
						
						<textarea class="form-input" name="descripcion"  style="width: 300px; height: 150px" placeholder="Describe tu producto" maxlength="200"></textarea>
					</div>
				</div>
				<input type="button" class="next btn btn-primary" value="Siguiente" id="regt" />
			</fieldset>


			<fieldset>
				<?php
				$sql = "SELECT id, nombre_cat_producto FROM categorias_productos";

				$result = DB::query($sql);

				?>
				<h2> Paso 2: Text</h2>
				<div class="form-group">
				
				<label>$<input type="text" class="form-input2 infor" name="precio" style="width: 14rem;" placeholder="Valor del producto" maxlength="9"></label><br><br>
				
				</div>
				<div class="form-group ">
					<div class="row justify-content-center">
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
				</div>
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
					
				</div>
				<input type="button" name="previous" class="previous btn btn-secondary" value=" Atras" />
				<input type="submit" name="submit" class="submit btn btn-primary" value=" Publicar " id="regt" />
				<!--<button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>-->
				
			</fieldset>
			
		</form>
	</div>
</body>

</html>



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
