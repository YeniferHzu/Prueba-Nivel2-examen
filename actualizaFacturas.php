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

			mysqli_query($conexion, "UPDATE t_facturas SET NumeroFactura='$NumeroFactura', FechaHora='$FechaHora', IdCliente='$IdCliente' WHERE IdFactura='$IdFactura' ")
   			or die ("Error al actualizar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Datos actualizados correctamente!");
				window.location.href="actualizaFacturas.html";
				</script>';

?>
