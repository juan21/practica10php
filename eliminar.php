<?php
require("conexion.php");
$id=$_GET ["id"];
?>

<!DOCTYPE  html>
<html lang="es">
<head>
<title>Eliminar Producto</title>
<meta charset="iso-8859-1"/>
</head>
<body>
<h1>Eliminar Producto</h1>
</div>
<!-- Formulario  -->
<form  action="borrar.php" method="POST">

<fieldset>
<legend>eliminar producto con ID: <?php echo $id ?> </legend>


<?php 
$result = mysqli_query($enlace, "SELECT 
id,clave,nombre,precio,descripcion FROM producto WHERE id = $id ");
while ($row = mysqli_fetch_array($result)){

?>
<label for='id'>ID</label><br>
<input type='text'  name='id' id='id' maxlenght='10' size='20'  value= '<?=$row['id']?>'> <br>

<label for='clave'>Clave</label><br>
<input type='text' name='clave' id='clave' maxlenght='10' size='20' value='<?php echo $row['clave']?>'> <br>

<label for='nombre'>Nombre</label><br>
<input type='text' name='nombre' id='nombre' maxlenght='10' size='20' value='<?=$row['nombre']?>'><br>
<br>
<label for='precio'>Precio</label><br>
<input type='text' name='precio' id='precio' maxlenght='10' size='20' value='<?=$row['precio']?>'><br>

<label for='descripción'>Decripci&oacute;n</label><br>
<textarea style='resize:none' name='descripcion' id='descripcion' rows='10' cols='60'>
<?php echo $row['descripcion']?>
</textarea>	
<?php
}
?>
</fieldset>
<br>
<input type='submit' value='Eliminar' onclick='alert('enviados!')'>
<a href='indice.php' >Indice</a>
</form>

</body>
</html>