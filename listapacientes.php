<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    <style type="text/css">
	@import "dcss/miestilo1.css";
	</style>
     </head>
  <body>
  <?php include("verificacion.php");?>
<div id="wra">
	<div id="cabecera">
		<div id="logocaja">
		
		</div>
		<div id="headimg">&nbsp;</div>
	</div>
	<div id="topnavi">
		<div class="spacing1">
		<ul type="circle">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="contacto.html">Contacto</a></li>
          <li><a href="cierre.php">Cerrar sesion</a></li>
		  </ul> 
		</div>
		 
		
	</div>
	<div id="bodybox">
		<div id="subnavi">
		<!-- menu -->
		<?php include ("menu.php"); ?>
		</div>
		<div class="ic"></div>	
		<div id="content">
		<center>
			<h1>Clínica San Pedro</h1>			
			
<?php
echo"<h2>Listado de Pacientes Registrados</h2>";
echo"<br>";
echo"<table border=3>";
echo"<tr>";
echo"<td><h3>Cedula</h2></td>";
echo"<td><h3>Nombre</h3></td>";
echo"<td><h3>Apellido</h3></td>";
echo"<td><h3>Direccion</h3></td>";
echo"<td><h3>Poblacion</h3></td>";
echo"<td><h3>Codigo Postal</h3></td>";
echo"<td><h3>Telefono</h3></td>";
echo"<td><h3>Fecha de Nacimiento</h3></td>";
echo"</tr>";
include("conexion.php");
$sql="SELECT * FROM paciente";
$resp=mysqli_query($conn,$sql);
while($mostrar=mysqli_fetch_array($resp)){

echo"<tr>";
echo"<td>";
echo $mostrar['cedula'];
echo "</td>";

echo"<td>";
echo $mostrar['nombre'];
echo "</td>";

echo"<td>";
echo $mostrar['apellido'];
echo "</td>";

echo"<td>";
echo $mostrar['direccion'];
echo "</td>";

echo"<td>";
echo $mostrar['poblacion'];
echo "</td>";

echo"<td>";
echo $mostrar['codigoPostal'];
echo "</td>";

echo"<td>";
echo $mostrar['telefono'];
echo "</td>";

echo"<td>";
echo $mostrar['fechaNacimiento'];
echo "</td>";
echo"</tr>";
}
echo"</table>"
?>
			

          </center>
		</div>
	</div>
	<div id="footer">
		<p><a target="_blank" href="http://www.pspspiele.org/"></a></p>
		
	</div>
</div>

  </body>
</html>