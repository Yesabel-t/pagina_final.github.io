




<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>Datos registrados</title>
<link rel="stylesheet" href="../CSS/estilos proy2.css"type="text/css">
</head>
<body>

	<h1>Corporativo Internacional Universitario</h1>
	<img src= "../imagenes/logo.png" alt="logo de la institución"> <!-- Imagen del logo de la institución con alt para describir la imagen si no aparece-->
    <h2>Nos especializamos en tí!</h2>
    <hr>
    <br>
    
    <h3>Datos registrados</h3>
    <br>
    

 <?php
$server= "localhost";
$usuario = "root";
$contrasena = "";
$bd = "registro";
$conexion = mysqli_connect($server, $usuario, $contrasena, $bd)
or die ("Error al conectar");

 $consulta=mysqli_query($conexion, "SELECT * from datos")
or die ("Error al mostrar datos");

echo '<table class="tabla" border="2px">';
echo '<tr>';
echo '<th id="Id">clave</th>';
echo '<th id="nombre">nombre</th>';
echo '<th id="email">email</th>';
echo '<th id="numero">numero</th>';
echo '<th id="lic">lic</th>';
echo '<th id="camp">camp</th>';
echo '<th id="fecha">fecha</th>';
echo '</tr>';

while ($extraido = mysqli_fetch_array($consulta))
{
echo'<tr>';
echo'<td>'.$extraido['id'].'</td>';
echo'<td>'.$extraido['nombre'].'</td>';
echo'<td>'.$extraido['email'].'</td>';
echo'<td>'.$extraido['numero'].'</td>';
echo'<td>'.$extraido['lic'].'</td>';
echo'<td>'.$extraido['camp'].'</td>';
echo'<td>'.$extraido['fecha'].'</td>';
echo'<tr>';
}
mysqli_close($conexion);
echo '</table>';

 ?>
</body>
</html>
    
