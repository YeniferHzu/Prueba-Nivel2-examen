<?php

	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "examen_yenifer_hernandez";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die("Error en la conexion");

		$IdCliente = $_POST['IdCliente'];
		$Nombre = $_POST['Nombre'];
		$Domicilio = $_POST['Domicilio'];
		$Email = $_POST['Email'];

			mysqli_query($conexion, "UPDATE t_clientes SET Nombre='$Nombre', Domicilio='$Domicilio', Email='$Email' WHERE IdCliente='$IdCliente' ")
   			or die ("Error al actualizar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Datos actualizados correctamente!");
				window.location.href="actualizaClientes.html";
				</script>';

?>