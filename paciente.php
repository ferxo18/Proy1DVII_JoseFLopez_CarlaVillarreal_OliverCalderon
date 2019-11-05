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
			<h3>Datos del Paciente</h3>
<?php

echo "<form action=paciente.php method=Post ENCTYPE=multipart/form-data>";
echo "<table border=0>";

echo "<tr>";
echo "<td>Cedula: </td>";
echo "<td><input type=text name=ced size=15 value=\"".@$ced."\"></td>";
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
echo "<td>Direccion: </td>";
echo "<td><textarea name=dir size=20 value=\"".@$dir."\">Direccion aqui...</textarea></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Poblacion: </td>";
echo "<td><input type=text name=pob size=15 value=\"".@$pob."\"></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Codigo Postal: </td>";
echo "<td><input type=text name=codp size=15 value=\"".@$codp."\"></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Telefono: </td>";
echo "<td><input type=text name=tel size=15 value=\"".@$tel."\"></td>";
echo"</tr>";

echo "<tr>";
echo "<td>Fecha de Nacimiento: </td>";
echo "<td> Dia: ";
echo"<select name=dia>;
<option value=01>1</option>;
   <option value=02>2</option>;
   <option value=03>3</option>;
   <option value=04>4</option>;
   <option value=05>5</option>;
   <option value=06>6</option>;
   <option value=07>7</option>;
   <option value=08>8</option>;
   <option value=09>9</option>;
   <option value=10>10</option>;
   <option value=11>11</option>;
   <option value=12>12</option>;
   <option value=13>13</option>;
   <option value=14>14</option>;
   <option value=15>15</option>;
   <option value=16>16</option>;
   <option value=17>17</option>;
   <option value=18>18</option>;
   <option value=19>19</option>;
   <option value=20>20</option>;
   <option value=21>21</option>;
   <option value=22>22</option>;
   <option value=23>23</option>;
   <option value=24>24</option>;
   <option value=25>25</option>;
   <option value=26>26</option>;
   <option value=27>27</option>;
   <option value=28>28</option>;
   <option value=29>29</option>;
   <option value=30>30</option>;
   <option value=31>31</option>;
   </select>";
  
   echo"Mes:";
   echo"<select name=mes>;
<option value=01>Enero</option>;
   <option value=02>Febrero</option>;
   <option value=03>Marzo</option>;
   <option value=04>Abril</option>;
   <option value=05>Mayo</option>;
   <option value=06>Junio</option>;
   <option value=07>Julio</option>;
   <option value=08>Agosto</option>;
   <option value=09>Septiembre</option>;
   <option value=10>Octubre</option>;
   <option value=11>Noviembre</option>;
   <option value=12>Diciembre</option>;
   </select>";
   echo"Ano:";
   echo"<input type=text name=ano size=5 value=\"".@$ano."\">";
echo"</td>";
echo"</tr>";


echo "</table>";
echo "<input type=submit name=guardar value=Guardar>";
echo "</form>";

include("conexion.php");

@$guardar=$_POST["guardar"];
@$dia=$_POST["dia"];
@$mes=$_POST["mes"];
@$ano=$_POST["ano"];
@$fechan=@$ano."-".@$mes."-".@$dia;
@$ced=$_POST["ced"];
@$nom=$_POST["nom"];
@$ape=$_POST["ape"];
@$dir=$_POST["dir"];
@$pob=$_POST["pob"];
@$codp=$_POST["codp"];
@$tel=$_POST["tel"];


if(@$guardar){   
    
$sql = "INSERT INTO paciente values ('$ced','$nom','$ape','$dir','$pob','$codp','$tel','$fechan')";
$resp=mysqli_query($conn,$sql);
if ($resp) {
   echo "Insercion Correcta";
} else {
   //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   echo"Paciente ya existe";
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