<!DOCTYPE html>
<html>
<head> 
<title>Productos</title>
</head>
<body>
<h1>Productos</h1>
</div>

<?php
require("conexion.php");
$i=0;
$result = mysqli_query($enlace,"SELECT * FROM producto");
while($row = mysqli_fetch_array($result))
  {
 
?>
 <table border="3" cellspacing="5">
 <tr align="center">
 <td>ID</td>
 <td>Clave</td>
 <td>Nombre</td>
 <td>Precio</td>
 <td>Descripcion</td>
 <td>Opciones</td>
 </tr>
<?php
while($row = mysqli_fetch_array($result))
  {
echo "<tr align='center'>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['clave']."</td>";
echo "<td>".$row['nombre']."</td>";
echo "<td>".$row['precio']."</td>";
echo "<td>".$row['descripcion']."</td>";
echo "<td>";
?>
<?php foreach ($row as $registro) { ?>
<a href= "editar.php ? id= <?php echo  $row['id'];?>">
<?php } ?>
<img src='Imag/limpiar.png'>
</a>

<a href= "eliminar.php ? id= <?php echo $row['id'];?>">
<img src='Imag/eliminar.jpg'>
</a>

<a href= 'ver.php ? id= <?php echo $row["id"];?>'>
<img src='Imag/ver.jpg'>
</a>
</td>
</tr>
  <?php } 

?>
 </table>
  <?php } 
mysqli_close($enlace);
?>
</br>
<a href= "Agregar.php">Agregar</a></br>
<img src='Imag/agregar.jpg'>			
</body>
</html>
