<?php
require("conexion.php");

$clave=$_POST["clave"];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$descripcion=$_POST["descripcion"];

echo '
<h1>Producto</h1>
</div>';

echo "<b>Clave:</b>".$clave;
echo "<br>";
echo "<b>Nombre:</b>".$nombre;
echo "<br>";
echo "<b>Precio:</b>".$precio; 
echo "<br>";
echo "<b>Descripcion:</b>".$descripcion;

$insertar = mysqli_query($enlace,"INSERT INTO producto (clave, nombre, precio, descripcion) VALUES ('$clave','$nombre','$precio','$descripcion')");

if (!$insertar){
	echo "</br><h3>Error al guardar</h3></br>";
}else{
	echo "<h3>Guardado</h3>";}

	
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://localhost/Practica10/Indice.php">';
mysqli_close($enlace);

?>