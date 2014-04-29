
<!DOCTYPE  html>
<html lang='es'>
<head>
</head>
<body>
<h1>Producto</h1>
</div>

<!-- Formulario  -->
<form  action='guardar.php' method='POST'>
<fieldset>
<legend>Agrega Producto</legend>

<label for='clave'>Clave</label><br>
<input type='text' name='clave' id='clave' maxlenght='10' size='20'> <br>

<label for='nombre'>Nombre</label></br>
<input type='text' name='nombre' id='nombre'  maxlenght='10' size='20'><br>

<label for='precio'>Precio</label></br>
<input type='text' name='precio' id='precio' maxlenght='10' size='20'><br>

<label for='descripción'>Decripcion</label></br>

<textarea style='resize: none' name='descripcion' id='descripcion' rows='15' cols='70'></textarea>

</fieldset>
<br>
<input type='submit' value='Guardar' onclick='alert('Guardados')'>
<img src='Imag/guardar.jpg'>

<input type='reset' value='Borrar'> 
<img src='Imag/lim.jpg'>

<a href='indice.php' >Indice</a>
<img src='Imag/flecha.jpg'>
</form>
</body>
</html>