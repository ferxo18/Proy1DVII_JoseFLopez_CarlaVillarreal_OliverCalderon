<?php
session_start();
if(!$_SESSION){?>
 <script lenguaje=javascript>
 alert("No ha iniciado Sesion");
 window.location="index.html";
 </script>

}

<?php
}
$nombreuser = $_SESSION["id_nombre"];
?>
