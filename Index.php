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
		
		</div>
		<div class="ic"></div>	
		<div id="content">
		<center>
			<h1>Clínica San Pedro</h1>
			<h2>Bienvenidos</h2>
			
			<?php
            echo "<form action=login.php method=post>";
            echo "<table>";
            echo "<tr>";
            echo "<td><h3>Login</h3></td>";
            echo "<td><input type=text name=login size=20></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h3>Clave</h3></td>";
            echo "<td><input type=password name=clave size=20></td>";
            echo "</tr>";
             echo "<tr>";
            echo "<td><input type=submit name=entrar size=10 value='Entrar'></td>";
            echo "<td><input type=submit name=nuevo size=10 value=Registrase></td>";
            echo "</tr>";
            echo "</table>";
            echo "</form>";

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