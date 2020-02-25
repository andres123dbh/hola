    <?php 
 session_start();
 if(!isset($_SESSION["usuario"])){
header("Location:login.php");
}

$u=$_SESSION["usuario"];
$uu=$_SESSION["usuario2"];
 ?>

<?php
 $h=$_POST['h'];
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
			$sql = "SELECT * FROM $h WHERE 	Apellido1='$u' AND Apellido2='$uu' ";
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
    <link rel="stylesheet" type="text/css" href="est.css">
  <?php require 'header4/header.php' ?>
		<h1>Tabla Notas</h1>
		<center>
		<table>
			<tr>
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
								echo$lista_estu['Apellido1'];echo "&nbsp;&nbsp";;
							
								echo$lista_estu['Apellido2'];echo "&nbsp;&nbsp";;
							
								echo$lista_estu['Nombre1'];echo "&nbsp;&nbsp";;
							
								echo$lista_estu['Nombre2'];echo "&nbsp;&nbsp";;
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
			<?php 
					$link = mysqli_connect('localhost', 'root', '','usuario');
	if(!$link){
		echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_error();
	}else{

			$sql = "SELECT * FROM $h WHERE 	Apellido1='$u' AND Apellido2='$uu' ";
			      $ejecuta_sentencia =mysqli_query($link, $sql) or die (mysqli_error($link)); 
		           $lista_estu = mysqli_fetch_array($ejecuta_sentencia);
		           $a=$lista_estu['Hab1']+$lista_estu['Hab2']+$lista_estu['Hab3']+$lista_estu['Hab4'];
		           $b=$a/4;
		           $tc=$b/100 * 70;
			       $r=$lista_estu['Recursos'];
				   $a2=$lista_estu['Acumulativo'];
				   $p=$lista_estu['PruebaSaber'];
				   $s=$lista_estu['SocioAfectiva'];
                   $ta=$a2/100 * 15;
                   $tr=$r/100 * 5;
                   $tp=$p/100 * 5;
                   $ts=$s/100 * 5;
                   $t=$tc+$ta+$tr+$tp+$ts;
                   echo "<br>";
			       echo "Su definitiva actual es ".$t." (tenga en cuenta que se utilizan todas las habilidades hasta las que se encuentra en 0)";
			
		}
	
               

						
						
						
				 ?>
</center>
	</body>
</html>
