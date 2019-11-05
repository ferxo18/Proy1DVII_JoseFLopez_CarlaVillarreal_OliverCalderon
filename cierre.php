<?php
session_start();
if($_SESSION["id_user"]){
    session_destroy();?>
    <script lenguaje=javascript>
        alert("Sesion Cerrada Correctamente");
        window.location="index.php";
        </script>
<?php }
else{?>
<script lenguaje=javascript>
alert("No ha iniciado sesion");
window.location="index.php";
        </script>

<?php } ?>
