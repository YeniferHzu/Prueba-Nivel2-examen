<?php

	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "examen_yenifer_hernandez";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die("Error en la conexion");

		$idProducto = $_POST['idProducto'];
		$Nombre = $_POST['Nombre'];
		$Marca = $_POST['Marca'];
		$Costo = $_POST['Costo'];
		$PrecioVenta = $_POST['PrecioVenta'];

			mysqli_query($conexion, "UPDATE t_productos SET Nombre='$Nombre', Marca='$Marca', Costo='$Costo', PrecioVenta='$PrecioVenta' WHERE idProducto='$idProducto' ")
   			or die ("Error al actualizar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Datos actualizados correctamente!");
				window.location.href="actualizaProductos.html";
				</script>';

?>
