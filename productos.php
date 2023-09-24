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

			$insertarClientes = "INSERT INTO t_productos VALUES ('$idProducto', '$Nombre', '$Marca', '$Costo', '$PrecioVenta')";

				$resultado = mysqli_query($conexion, $insertarClientes)
					or die ("Error al insertar datos");

	mysqli_close($conexion);
	echo '<script type="text/javascript">alert("¡Producto registrado!");
				window.location.href="productos.html";
				</script>';

?>