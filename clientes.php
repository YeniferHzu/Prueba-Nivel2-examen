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

			$insertarClientes = "INSERT INTO t_clientes VALUES ('$IdCliente', '$Nombre', '$Domicilio', '$Email')";

				$resultado = mysqli_query($conexion, $insertarClientes)
					or die ("Error al insertar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Registrado correctamente!");
				window.location.href="clientes.html";
				</script>';

?>