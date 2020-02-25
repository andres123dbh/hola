<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	 try {
	 	$server='localhost';
        $username = 'root';
        $password = '';
        $database = 'usuario';

	 	$base=new PDO("mysql:host=$server;dbname=$database;", $username, $password); // OJO CON ESTA LINEA 
	 	$base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$sql="SELECT * FROM usuarioestu WHERE USUARIO= :USUARIO AND USUARIO2= :USUARIO2 AND PASSWORD= :PASSWORD"; //marcador

	 	$resultado=$base->prepare($sql);
	 	$USUARIO=htmlentities(addslashes($_POST["USUARIO"]));
	 	$USUARIO2=htmlentities(addslashes($_POST["USUARIO2"]));
	 	$PASSWORD=htmlentities(addslashes($_POST["PASSWORD"]));  //guardo


	 	$resultado->bindValue(":USUARIO", $USUARIO);
	 	$resultado->bindValue(":USUARIO2", $USUARIO2);
	 	$resultado->bindValue(":PASSWORD", $PASSWORD);   //Equivalencia entre marcador con los que se guarda

	 	$resultado->execute();

	 	$numero_registro=$resultado->rowCount(); //Creo un IF para evaluar

	 	if ($numero_registro!=0) { //Redirigir a pagina de usuarios registrados
          
            


	 		//Se crea la sesión
 session_start();
             $_SESSION["usuario"]=$_POST["USUARIO"];
             $_SESSION["usuario2"]=$_POST["USUARIO2"];
             
	 		header("Location:f1.php");

			// $_SESSION["usuario"] = $_POST["login"];

			// echo("HAS INICIADO SESIÓN");

	 		//header("Location:usuarios_registrados1.php");

	 	} else {     //Redirigir a la página de LOGIN

	 		//echo "<script> alert('Datos erróneos, verifique.'); </script>";
	 		echo("No estás registrado!!");
	 		header("location:login.php");

	 	}

	 } catch(Exception $e) {

	 	die("Error: " . $e->getMessage());

	 }

	 ?>
	
</body>
</html>