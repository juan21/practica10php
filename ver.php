<?php
require("conexion.php");
$id=$_GET ["id"];
?>

<!DOCTYPE  html>
<html lang="es">
<head>
<title>Ver Producto</title>
<meta charset="iso-8859-1"/>
</head>
<body>
<h1>Producto</h1>
</div>
<!-- Formulario  -->
<form  action="actualizar.php" method="POST">

<fieldset>
<legend> Datos de Producto</legend>


<?php 
echo $id; 
?>
<?php 
$result = mysqli_query($enlace, "SELECT 
id,clave,nombre,precio,descripcion FROM producto WHERE id = $id ");
while ($row = mysqli_fetch_array($result)){

?>
<label for='id'>ID</label><br>
<label for='text'  name='id' id='id' > 
<?php echo $row['id']
?>
<br>
<br>
<label for='clave'>Clave</label><br>
<label for='text' name='clave' id='clave' > 
<?php echo $row['clave']
?>
<br>
<br>
<label for='nombre'>Nombre</label><br>
<label for='text' name='nombre' id='nombre' >
<?php echo $row['nombre']
?>
<br>
<br>
<label for='precio'>Precio</label><br>
<label for='text' name='precio' id='precio' >
<?php echo $row['precio']
?>
<br>
<br>
<label for='descripción'>Decripci&oacute;n</label><br>
<label for='resize:none' name='descripcion' id='descripcion' >
<?php echo $row['descripcion']?>
</textarea>	
<?php
}
?>
</fieldset>
<br>
<a href='indice.php' >Indice</a>
</form>

</body>
</html>