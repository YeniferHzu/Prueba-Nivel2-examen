<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="icono.png" type="image/x-icon">
	<title>Reportes generados</title>
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
    <h1>Reporte de facturación</h1>
        <p>Estos son los detalles del cliente y el producto que adquirió:</p>

<!--Consulta de reportes-->
<div align="center">

<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "examen_yenifer_hernandez";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("Error en la conexion");

$IdCliente = isset($_POST['IdCliente']) ? $_POST['IdCliente'] : ''; // Obtén el valor de IdCliente desde la entrada del usuario
$idProducto = isset($_POST['idProducto']) ? $_POST['idProducto'] : ''; // Obtén el valor de idProducto desde la entrada del usuario

$consulta = mysqli_query($conexion, "SELECT
    t_facturas.NumeroFactura,
    t_facturas.FechaHora,
    t_facturas.IdCliente,
    t_clientes.Nombre AS NombreCliente,
    t_productos.Nombre AS NombreProducto,
    t_productos.idProducto,
    t_productos.Costo 
    FROM t_facturas, t_productos, t_clientes 
    WHERE t_facturas.IdCliente = '$IdCliente' AND t_productos.idProducto = '$idProducto' AND t_facturas.IdCliente = t_clientes.IdCliente") or die("Error al mostrar los datos");

echo "<table>";
echo "<tr>";
echo "<td>#Factura</td>";
echo "<td>Fecha y Hora</td>";
echo "<td>#Cliente</td>";
echo "<td>Nombre</td>";
echo "<td>#Producto</td>";
echo "<td>Producto</td>";
echo "<td>Costo</td>";
echo "</tr>";

while ($datos = mysqli_fetch_array($consulta)) {
    echo "<tr>";
    echo "<td>".$datos['NumeroFactura']."</td>";
    echo "<td>".$datos['FechaHora']."</td>";
    echo "<td>".$datos['IdCliente']."</td>";
    echo "<td>".$datos['NombreCliente']."</td>";
    echo "<td>".$datos['idProducto']."</td>";
    echo "<td>".$datos['NombreProducto']."</td>";
    echo "<td>".$datos['Costo']."</td>";
    echo "</tr>";
}

mysqli_close($conexion);
echo "</table>";
?>

</div>

<br><br><br><br>

<div align="center">
    <!--BOTNÓN PARA REGRESAR-->
    <a href="reportes.html">
        <button id="boton1">Regresar</button>
    </a>

    <!--BOTÓN PARA ACTUALIZAR-->
    <a href="index.html">
        <button id="boton1">Inicio</button>
    </a>
</div>


<br><br><br><br><br><br><br>

<!--PIE DE PÁGINA-->
<footer>
    <p align="center"><a href="https://linktr.ee/yen_hzu" target="_blank">Desarrollado por Yenifer Hernández</a></p>
</footer>

</body>
</html>
