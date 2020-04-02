<?php
	include 'conexion.php';

	$numero = $_POST['numero'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cel = $_POST['cel'];
	$correo = $_POST['correo'];
	$mensaje = "";

	$insertar = "INSERT INTO usuariobuscan(cedulaBusca, nombre, apellido, celular, email) VALUES 
	('$numero', '$nombre', '$apellido', '$cel', '$correo')";

	
	if(empty($numero) or empty($nombre) or empty($apellido) or empty($cel) or empty($correo)){
	echo  $mensaje = '<script>
   	 alert("Por favor completa todos los campos")
   	 window.location.replace("buscar2.php")
	</script>';
	}

	$verifica_user = mysqli_query($conexion, "SELECT * FROM usuariobuscan WHERE cedulaBusca = '$numero'");
	if(mysqli_num_rows($verifica_user)>0){	

	echo  $mensaje = '<script>
   	 alert("Tu usuario ya existe")
   	 window.location.replace("buscar2.php")
	</script>';

	}
	$verifica_correo = mysqli_query($conexion, "SELECT * FROM usuariobuscan WHERE  email = '$correo'");

		if(mysqli_num_rows($verifica_correo)>0){

	echo  $mensaje = '<script>
   	 alert("Tu correo ya existe")
   	 window.location.replace("buscar2.php")
	</script>';

	}

	$resultado = mysqli_query($conexion,$insertar);

	if(!$resultado){
	echo  $mensaje = '<script>
   	 alert("Error al registrar")
   	 window.location.replace("buscar2.php")
	</script>';

	}else{
	echo  $mensaje = '<script>
   	 alert("Registrado con exito")
   	 window.location.replace("info.php")
	</script>';
	}

	mysqli_close($conexion);



















?>