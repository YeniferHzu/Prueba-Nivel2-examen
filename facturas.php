<?php

	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "examen_yenifer_hernandez";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die("Error en la conexion");

		$IdFactura = $_POST['IdFactura'];
		$NumeroFactura = $_POST['NumeroFactura'];
		$FechaHora = $_POST['FechaHora'];
		$IdCliente = $_POST['IdCliente'];

			$insertarClientes = "INSERT INTO t_facturas VALUES ('$IdFactura', '$NumeroFactura', '$FechaHora', '$IdCliente')";

				$resultado = mysqli_query($conexion, $insertarClientes)
					or die ("Error al insertar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Factura registrada correctamente!");
				window.location.href="facturas.html";
				</script>';

?>