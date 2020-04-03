<?php
	
	include 'conexion.php';

	$cedula = $_POST['cc'];
	$fecnac = $_POST['fn'];
	$mensaje = "";

	$consulta = "SELECT * FROM base WHERE cedulaPersona = '$cedula' and fechaNacimiento = '$fecnac'";
	$resultado = mysqli_query($conexion,$consulta);


	$filas = mysqli_num_rows($resultado);

	if($filas>0){

 	echo  $mensaje = '<script>
   	 alert("Felicidades tu documentos se ha encontrado")
   	 window.location.replace("buscar2.php")
	</script>';

	}else{

	// echo $mensaje = '<script>
   	//  alert("Lo sentimos no se ha encontrado tu documento")
   	//  window.location.replace("buscarhp.php")
	// </script>';

	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);


?>