<?php

$correo = $_POST["usuario"];
$clave = $_POST["clave"];

$conexion = mysqli_connect("localhost", "root", "", "srl");
$consulta = "UPDATE login  SET clave = '$clave' WHERE usuario = '$usuario'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location:ServiciosRomano.html");
}
else{
    echo'<script>
    alert ("Usuario o Contraseña incorrecta");
    window.history.go(-1);
    </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);