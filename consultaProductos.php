<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="icono.png" type="image/x-icon">
	<title>Consultar Productos</title>
</head>
<body>

<!--Menú de las secciones-->
	<header id="main-header">
            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="clientes.html">Cliente</a></li>
                    <li><a href="productos.html">Productos</a></li>
                    <li><a href="facturas.html">Facturas</a></li>
                    <li><a href="detalleFactura.html">Detalles Facturas</a></li>
                    <li><a href="reportes.html">Reportes</a></li>
                </ul>
            </nav>
    </header>

<!--Inicio del sitio y bienvenida-->
    <h1>Productos</h1>
    	<h2>Aquí encontrarás la información de tus productos</h2>

<div align="center">

<?php

	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "examen_yenifer_hernandez";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die("Error en la conexion");

			$consulta = mysqli_query($conexion, "SELECT * FROM t_productos")

				or die("Error al mostrar los productos");

				echo "<table>";
				echo "<tr>";
				echo "<td>#Producto</td>";
				echo "<td>Nombre</td>";
				echo "<td>Marca</td>";
				echo "<td>Costo</td>";
				echo "<td>PrecioVenta</td>";
				echo "</tr>";

					while ($datos = mysqli_fetch_array($consulta)) {
						echo "<tr>";
						echo "<td>".$datos['idProducto']."</td>";
						echo "<td>".$datos['Nombre']."</td>";
						echo "<td>".$datos['Marca']."</td>";
						echo "<td>".$datos['Costo']."</td>";
						echo "<td>".$datos['PrecioVenta']."</td>";
						echo "</tr>";
					}

			mysqli_close($conexion);
			echo "</table>";
?>

</div>

<br><br><br>

<div align="center">
	<!--BOTNÓN PARA REGRESAR-->
	<a href="productos.html">
		<button id="boton1">Regresar</button>
	</a>

	<!--BOTÓN PARA ACTUALIZAR-->
	<a href="actualizaProductos.html">
		<button id="boton1">Actualizar Datos</button>
	</a>
</div>

<br><br><br><br><br>
<!--PIE DE PÁGINA-->
<footer>
    <p align="center"><a href="https://linktr.ee/yen_hzu" target="_blank">Desarrollado por Yenifer Hernández</a></p>
</footer>

</body>
</html>
