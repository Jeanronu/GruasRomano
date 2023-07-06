<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Servicio Romano SRL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Anny y Jean">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="admin.css">

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="50" background="43569hd.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	
</div>
</header>
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<a href="">Bienvenido <strong>Administrador/a</strong> </a></li>
		<a href="desconectar.php"> Cerrar Cesión </a></li>			 
	  </div>
	</div>
  </div>
</div>
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
<h2> CLIENTES REGISTRADOS</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<div class="row-fluid">
		



			<?php

				require("php/cn.php");
				$sql=("SELECT * FROM login");
	$query=mysqli_query($conexion, $sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Nombre</td>";
						echo "<td>Apellidos</td>";
						echo "<td>Correo</td>";
						echo "<td>Usuario</td>";
						echo "<td>Contraseñas</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a 'usuario=$arreglo[3]'><img src='imagenes/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?usuario=$arreglo[3]&rolborrar=2'><img src='imagenes/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$rolborrar==2){
		
						$sqlborrar="DELETE FROM 'login' WHERE usuario=$usuario";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
				
						echo "<script>location.href='admin.php'</script>";
					}

			?>
	
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		
		
		</div>

</div>

	</div>
</div>
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>

 </footer>
</div>
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>