<!DOCTYPE html>
<html lang="en"> 
   
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->


         
     	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<center> <a href="index.html"><img src="img/logo1.png" alt="" class="img-responsive logo"></a></center>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					         <ul class="nav navbar-nav navbar-right">
					         <li><a class="menu" href="cierre.php">Cerrar Sesion</a></li>
					         </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			     
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>CLINICA SAN PEDRO</h2>
		               			<p>Servicio De Alta Calidad Para Hombres Y Mujeres</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>CLINICA SAN PEDRO</h2>
		               			<p>Servicio De Alta Calidad Para Hombres Y Mujeres</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>CLINICA SAN PEDRO</h2>
		               			<p>Servicio De Alta Calidad Para Hombres Y Mujeres</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>CLINICA SAN PEDRO</h2>
		               			<p>Servicio De Alta Calidad Para Hombres Y Mujeres</p>
			                </div>
			            </div>
			        </div>
			      
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Anterior</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Siguiente</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

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
         <!-- footer starts here -->
         <footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Realizado por: Calderón Oliver, López José F, Villarreal Carla. </p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>		
	</div>
</div>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

  </body>
</html>