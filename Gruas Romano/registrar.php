<?php
include 'php/cn.php';

//recibir datos
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["email"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

//consulta pa consultar
$insertar = "INSERT INTO login (nombre, apellidos, correo, usuario, clave, telefono, rol, pasadmin) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave', '$telefono')";

$verificar_usuario = mysqli_query($conexion, "SELECT usuario FROM 'login'  WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
        alert ("El usuario ya esta registrado");
        window.history.go(-1);
         </script>';
    exit;
}
$verificar_correo = mysqli_query($conexion, "SELECT correo FROM 'login' WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
    alert ("Este correo ya esta en uso");
    window.history.go(-1);
    </script>';
    exit;
}

//ejecutar
$resultado = mysqli_query($conexion, $insertar);
if ($resultado){
    echo '<script>
    alert ("Erro al registrarse");
    window.history.go(-1);
    </script>';
} else{
    echo '<script>
    alert ("Usted ha sido registrado");
    </script>';
    echo "<script>location.href='ServicioRomano.html'</script>";
}

//cerrar conexion
mysqli_close($conexion);
?>