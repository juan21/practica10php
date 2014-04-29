<?php
require("conexion.php");

$id=$_POST["id"];
$clave=$_POST["clave"];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$descripcion=$_POST["descripcion"];
?>
<h1>Producto</h1>
</div>

<?php
echo "<b>Id:</b>".$id;
echo "<br>";
echo "<b>Clave:</b>".$clave;
echo "<br>";
echo "<b>Nombre:</b>".$nombre;
echo "<br>";
echo "<b>Precio:</b>".$precio;
echo "<br>";
echo "<b>Descripcion:</b>".$descripcion;

$actualizar = mysqli_query($enlace,"DELETE FROM producto WHERE id='$id'");

if (!$actualizar){
	echo "</br><h3>Error al guardar</h3></br>";
}else{
	echo "<h3>Eliminando.....</h3>";}

	echo '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=indice.php">';
mysqli_close($enlace);
?>