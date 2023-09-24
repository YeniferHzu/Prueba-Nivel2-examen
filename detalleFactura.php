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

			$insertarDetalles = "INSERT INTO t_detalleFactura VALUES ('$idDetalle', '$IdFactura', '$idProducto', '$Cantidad')";

				$resultado = mysqli_query($conexion, $insertarDetalles)
					or die ("Error al insertar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Detalles registrados correctamente!");
				window.location.href="detalleFactura.html";
				</script>';

?>