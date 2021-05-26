


<!DOCTYPE>
<html>
<head>
    <tittle>Insertar</tittle>
    <link rel="stylesheet" href="../CSS/estilos proy.css"type="text/css">
</head>
<body>
	<h1>Corporativo Internacional Universitario</h1>
	<img src= "../imagenes/logo.png" alt="logo de la institución"> <!-- Imagen del logo de la institución con alt para describir la imagen si no aparece-->
    <h2>Nos especializamos en tí!</h2>
    <hr>
    <br>
    <br>
    <?php
        $server= "localhost"; 
        $usuario = "root";
        $contrasena = "";
        $bd = "registro";
      
        $conexion = mysqli_connect($server, $usuario, $contrasena, $bd)
             or die ("Error al conectar");

 

            $nombre= $_POST['nombre'];
			$email= $_POST['email'];
			$numero= $_POST['numero'];
			$lic= $_POST['lic'];
			$camp= $_POST['camp'];
			$fecha= date('d/m/y');
       
        $insertar = "INSERT into datos values ('0','$nombre','$email','$numero','$lic','$camp','$fecha')";
        
        $resultado = mysqli_query($conexion, $insertar)
           or die ("Error al insertar datos");

 

        mysqli_close($conexion);
        echo " Datos insertados correctamente";
    ?>
    <br>
       <form action="mostrar.php">
        <input type="submit"  value="Mostrar registros insertados" class="boton_personalizado">
    </form>
</body>
</html>


