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
			<h3>Datos de Medicos</h3>
<?php

echo "<form action=medico.php method=Post ENCTYPE=multipart/form-data>";
echo "<table border=0>";

echo "<tr>";
echo "<td>Codigo: </td>";
echo "<td><input type=text name=cod size=15 value=".@$cod."></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Nombre: </td>";
echo "<td><input type=text name=nom size=15 value=\"".@$nom."\"></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Apellido: </td>";
echo "<td><input type=text name=ape size=15 value=\"".@$ape."\"></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Telefono: </td>";
echo "<td><input type=text name=tel size=15 value=\"".@$tel."\"></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Especialidad: </td>";
echo "<td>";
echo"<select name=espe>;
<option value=MedicinaGeneral>Medicina General</option>;
   <option value=Ginecologia>Ginecologia</option>;
   <option value=Oftalmologia>Oftalmologia</option>;
   <option value=Pediatria>Pediatria</option>;
   <option value=Cardiologia>Cardiologia</option>;
   <option value=Neurologia>Neurologia</option>;
   <option value=Dermatologia>Dermatologia</option>;
   <option value=Odontologia>Odontologia</option>;
   <option value=Dermatologia>Dermatologia</option>;
   <option value=MedicinaInterna>Medicina Interna</option>;
   <option value=Otorrinolaringología>Otorrinolaringología</option>;
   <option value=Nefrologia>Nefrologia</option>;   
   </select>";
 echo"</td>" ;
 echo"</tr>";


echo "</table>";
echo "<input type=submit name=guardar value=Guardar>";
echo "</form>";

include("conexion.php");

@$guardar=$_POST["guardar"];
@$cod=$_POST["cod"];
@$nom=$_POST["nom"];
@$ape=$_POST["ape"];
@$tel=$_POST["tel"];
@$espe=$_POST["espe"];
if(@$guardar){   
    
$sql = "INSERT INTO medicos values ('$cod','$nom','$ape','$tel','$espe')";
$resp=mysqli_query($conn,$sql);
if ($resp) {
   echo "Insercion Correcta";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}


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