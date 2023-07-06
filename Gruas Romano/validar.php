<?php

session_start();
	require("php/cn.php");

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$mysqli = mysqli_connect("localhost", "root", "", "srl");
$consulta = "SELECT * FROM login WHERE usuario = '$usuario' and clave = '$clave'";
$resultado = mysqli_query($mysqli, $consulta);

$sql2=mysqli_query($mysqli, "SELECT * FROM login WHERE usuario='$usuario'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($clave==$f2['pasadmin']){
			$_SESSION['usuario']=$f2['usuario'];
			$_SESSION['correo']=$f2['correo'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}

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
mysqli_close($mysqli);