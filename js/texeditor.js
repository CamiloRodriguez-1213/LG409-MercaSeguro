<script type="text/javascript">

		//Opciones
		var btnBold = document.getElementById('btnBold'),
			btnItalic = document.getElementById('btnItalic'),
			btnUnderline = document.getElementById('btnUnderline'),
			btnColor = document.getElementById('btnColor'),
			btnBackColor = document.getElementById('btnBackColor');

		btnBold.onclick = function(event){
			document.execCommand(btnBold.getAttribute("data-type"),false,null);
		}

		btnItalic.onclick = function(event){
			document.execCommand(btnItalic.getAttribute("data-type"),false,null);
		}	

		btnUnderline.onclick = function(event){
			document.execCommand(btnUnderline.getAttribute("data-type"),false,null);
		}	

		btnColor.onclick = function(event){
			document.execCommand(btnColor.getAttribute("data-type"),false,"#35037F");
		}	

		btnBackColor.onclick = function(event){
			document.execCommand(btnBackColor.getAttribute("data-type"),false,"gold");
		}	
	</script>