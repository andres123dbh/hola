    <?php 
 session_start();
 if(!isset($_SESSION["usuario"])){
header("Location:login.php");
}
$h=$_SESSION['h'];

 ?>

<?php
	//paso 1 es conectarnos con el servidor //esta manera ya esta obsoleta!!
	$link = mysqli_connect('localhost', 'root', '');
	if(!$link){
		echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_error();
	}else{
	//Paso 2 es seleccionar la base de datos
		$base = mysqli_select_db($link,'usuario');
		if(!$base){
			echo'No se encontro la base de datos: '.mysql_error();
		}else{
	//Paso 3 es hacer la sentencia sql y ejecutarla
			$sql = "SELECT * FROM $h";
			      $ejecuta_sentencia =mysqli_query($link, $sql) or die (mysqli_error($link)); 
			if(!$ejecuta_sentencia){
				echo'hay un error en la sentencia de sql: '.$sql;
			}else{
	//Paso 4 es traer los resultados como un array para imprirlos en pantalla
				$lista_estu = mysqli_fetch_array($ejecuta_sentencia);
			}
		}
	}
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Mostrar Datos</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  <?php require 'header2/header.php' ?>
		<h1>Tabla Nota Estudiante</h1>
		<center>
		<table>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Hab1</th>
				<th>Hab2</th>
				<th>Hab3</th>
				<th>Hab4</th>
				<th>Recursos</th>
				<th>Acumulativo</th>
				<th>PruebaSaber</th>
				<th>SocioAfectiva</th>
				<?php
					for($i=0; $i<$lista_estu; $i++){
						echo"<tr>";
						echo"<td>";
								echo$lista_estu['id'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['Apellido1'];echo "&nbsp;&nbsp";;
							
								echo$lista_estu['Apellido2'];echo "&nbsp;&nbsp";;
							
								echo$lista_estu['Nombre1'];echo "&nbsp;&nbsp";;
							
								echo$lista_estu['Nombre2'];echo "&nbsp;&nbsp";;

								echo$lista_estu['Nombre3'];echo "&nbsp;&nbsp";;
							echo"</td>";
							echo"<td>";
								echo$lista_estu['Hab1'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['Hab2'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['Hab3'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['Hab4'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['Recursos'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['Acumulativo'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['PruebaSaber'];
							echo"</td>";
							echo"<td>";
								echo$lista_estu['SocioAfectiva'];
							echo"</td>";
						echo"</tr>";
						
						$lista_estu = mysqli_fetch_array($ejecuta_sentencia);	
					}
				?>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<br>
</center>
	</body>
</html>
