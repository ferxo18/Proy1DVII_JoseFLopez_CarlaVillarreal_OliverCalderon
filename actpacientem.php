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
		<?php include ("menu2.php"); ?>
		</div>
		<div class="ic"></div>	
		<div id="content">
		<center>
         <h1>Clínica San Pedro</h1>	
         <h3>Datos de Ingreso</h3>			
			
<?php

include("conexion.php");
@$buscar1=$_POST["buscar1"];  
@$codpac=$_POST["codpac"];
if(@$buscar1){
   $sql="SELECT * FROM ingreso i JOIN paciente p ON i.codigoPaciente = p.cedula WHERE codigoPaciente = '$codpac'";
   @$resp=mysqli_query($conn,$sql);
   @$fila = mysqli_num_rows($resp);
   if($fila){
      while($registro=mysqli_fetch_assoc($resp)){
         $ced=$registro["cedula"];
         $nom=$registro["nombre"];
         $ap=$registro["apellido"];
         $nhab=$registro["numeroHabitacion"];
         $ncam=$registro["numeroCama"];
         $fecha=$registro["fechaIngreso"];
         $codmed=$registro["codigoMedico"];
         $at=$registro["atendido"];
         $diag=$registro["diagnostico"];
         
      }
   }
}

echo "<form action=actpacientem.php method=Post ENCTYPE=multipart/form-data>";
echo "<table border=0>";

echo "<tr>";
echo "<td>Paciente: </td>";
echo"<td>";
echo "<select name=codpac>";
echo$sql="SELECT * FROM paciente";
$resp=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($resp)){
echo "<option>";
echo $row['cedula'];
echo"</option>";
}
echo"</select>";
echo"<input type=submit name=buscar1 value=Buscar>Busque Datos del Paciente Aqui";
echo"</td>";

echo"</tr>";

echo"<tr>";
echo"<td>Cedula</td>";
echo "<td><input type=text name=ced size=15 value=".@$ced."></td>";
echo"</tr>";
echo"<tr>";
echo"<td>Nombre</td>";
echo "<td><input type=text name=pac size=15 value=".@$nom."></td>";
echo"</tr>";
echo"<tr>";
echo"<td>Apellido</td>";
echo "<td><input type=text name=ap size=15 value=".@$ap."></td>";
echo"</tr>";
echo "<tr>";
echo "<td>Numero De Habitacion: </td>";
echo "<td><input type=text name=nhab size=15 value=".@$nhab."></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Numero de Cama: </td>";
echo "<td><input type=text name=ncam size=15 value=".@$ncam."></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Fecha de Ingreso: </td>";
echo "<td><input type=text name=fecha size=15 value=".@$fecha."></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Codigo de Medico: </td>";
echo "<td><input type=text name=codmed size=15 value=".@$codmed."></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Atendido: </td>";
echo"<td>";
echo"<select name=at selected=".@$at.">;
<option value=NO>NO</option>;
   <option value=SI>SI</option>;
   </select>";
echo"</td>";
echo"</tr>";

echo "<tr>";
echo "<td>Diagnostico: </td>";
echo "<td><textarea name=diag size=20 value=\"".@$diag."\">".@$diag."</textarea></td>";
echo"</tr>";

echo "</table>";
echo "<input type=submit name=guardar value=Guardar>";
echo "</form>";
@$guardar=$_POST["guardar"];
@$fecha=$_POST["fecha"];
@$nhab=$_POST["nhab"];
@$ncam=$_POST["ncam"];
@$ced=$_POST["ced"];
@$codmed=$_POST["codmed"];
@$at=$_POST["at"];
@$diag=$_POST["diag"];

if(@$guardar){   
    
    $sql="UPDATE ingreso set numeroHabitacion='$nhab', numeroCama='$ncam', fechaIngreso='$fecha',codigoPaciente='$ced',codigoMedico='$codmed',atendido='$at',diagnostico='$diag' where codigoPaciente='$ced'";
    $resp=mysqli_query($conn,$sql);
    if ($resp) {
       echo "Actualizacion Correcta";
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