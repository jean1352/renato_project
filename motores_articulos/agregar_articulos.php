<?php
	include '../conection.php';
	if(isset($_POST['title'])){
		if(isset($_POST['descripcion'])){
			$query = sprintf("INSERT INTO articulos(titulo, descripcion) VALUES('%s', '%s');", mysqli_real_escape_string($con, $_POST['title']), mysqli_real_escape_string($con, $_POST['descripcion']));
			$sql = mysqli_query($con, $query) or die('{"error": true, "error_info": "No se pudo procesar, intente nuevamente. Si el problema persiste pague más dinero."}');
			die('{"error": false}');
		}else{
			die('{"error": true, "error_info": "No se encontró la descripcion para el articulo."}');	
		}
	}else{
		die('{"error": true, "error_info": "No se encontró el título para el articulo."}');
	}
?>