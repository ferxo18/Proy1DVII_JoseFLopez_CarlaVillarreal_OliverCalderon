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
echo"<h2>Listado de Ingresos</h2>";
echo"<br>";
echo"<table border=1>";
echo"<tr>";
echo"<td><h3>Cod. Ingreso</h2></td>";
echo"<td><h3>Num. Habitacion</h3></td>";
echo"<td><h3>Num. Cama</h3></td>";
echo"<td><h3>Fecha Ingreso</h3></td>";
echo"<td><h3>Cod. Paciente</h3></td>";
echo"<td><h3>Atendido</h3></td>";
echo"<td><h3>Diagostico</h3></td>";
echo"<td><h3>Nombre Paciente</h3></td>";
echo"<td><h3>Apellido Paciente</h3></td>";
echo"<td><h3>Cod. Medico</h3></td>";
echo"</tr>";
include("conexion.php");
$sql="SELECT * FROM ingreso i JOIN paciente p ON i.codigoPaciente = p.cedula";
$resp=mysqli_query($conn,$sql);
while($mostrar=mysqli_fetch_array($resp)){

echo"<tr>";
echo"<td>";
echo $mostrar['codigo'];
echo "</td>";

echo"<td>";
echo $mostrar['numeroHabitacion'];
echo "</td>";

echo"<td>";
echo $mostrar['numeroCama'];
echo "</td>";

echo"<td>";
echo $mostrar['fechaIngreso'];
echo "</td>";

echo"<td>";
echo $mostrar['codigoPaciente'];
echo "</td>";
echo"<td>";
echo $mostrar['atendido'];
echo "</td>";

echo"<td>";
echo $mostrar['diagnostico'];
echo "</td>";

echo"<td>";
echo $mostrar['nombre'];
echo "</td>";

echo"<td>";
echo $mostrar['apellido'];
echo "</td>";

echo"<td>";
echo $mostrar['codigoMedico'];
echo "</td>";

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