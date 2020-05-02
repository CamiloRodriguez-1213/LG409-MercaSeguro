
function validarSoloJs(){
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;

	if( nombre && apellido && email && password != "" ) {
		
		var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
		overlay = document.getElementById('overlay'),
		popup = document.getElementById('popup'),
		btnCerrarPopup = document.getElementById('btn-cerrar-popup');
	
	btnAbrirPopup.addEventListener('click', function(){
		overlay.classList.add('active');
		popup.classList.add('active');
	});
	
	btnCerrarPopup.addEventListener('click', function(e){
		e.preventDefault();
		overlay.classList.remove('active');
		popup.classList.remove('active');
	});
	}
   }

