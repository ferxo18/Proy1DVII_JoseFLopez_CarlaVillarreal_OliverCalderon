<?php include("conexion.php");
if(!isset($_SESSION)) {
	session_start();
}
  @$clave = $_POST["clave"];
  @$login = $_POST["login"];
 $sql="SELECT * from usuarios where login='$login' and clave ='$clave'";
  $result=mysqli_query($conn, $sql);
  $registro = mysqli_fetch_array($result);
  if(!$registro[0]) { ?>
  	<script lenguage=javascript>
      alert("Usuario incorrecto");
      window.location="index.php";
      </script>
 <?php }
  else {
  	$_SESSION["id_user"]=$registro["login"];
  	$_SESSION["id_nombre"]=$registro["nombre"];
    
    if($login=="admin" && $clave=="123456"){
    header("Location:paciente.php");
    }
   
    if($login!="admin" && $clave!="123456"){
      header("Location:pacientesxmedicom.php");
      }
    
  }
  
?>