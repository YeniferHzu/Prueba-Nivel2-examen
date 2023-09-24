<?php

	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "examen_yenifer_hernandez";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die("Error en la conexion");

		$idDetalle = $_POST['idDetalle'];
		$IdFactura = $_POST['IdFactura'];
		$idProducto = $_POST['idProducto'];
		$Cantidad = $_POST['Cantidad'];

			mysqli_query($conexion, "UPDATE t_detalleFactura SET IdFactura='$IdFactura', idProducto='$idProducto', Cantidad='$Cantidad' WHERE idDetalle='$idDetalle' ")
   			or die ("Error al actualizar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Datos actualizados correctamente!");
				window.location.href="actualizaDetalleFactura.html";
				</script>';

?>
