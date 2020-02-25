<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
 session_start();
  if(!isset($_SESSION["usuario"])){
header("Location:login.php");}
 ?>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="est.css">

  <?php require 'header3/header.php' ?>
  <h1>Material de Ayuda</h1>
  <center>
<table>
	<tr>
		<th>
<h3>Tema&nbsp;&nbsp;</h3>
	</th>
	<th>
<h3>Matematicas&nbsp;&nbsp;</h3>
	</th>
	<th>
<h3>Tema&nbsp;&nbsp;</h3>
	</th>
	<th>
<h3>Informatica&nbsp;&nbsp;</h3>
	</th>
	<th>
<h3>Tema&nbsp;&nbsp;</h3>
	</th>
	<th>
<h3>Espenol&nbsp;&nbsp;</h3>
	</th>
	<tr>
		<td>Global</td>
	
	<td><a href="descarga1.php">Descargar pdf</a></td>
	<td>Php basico</td>
	<td><a href="descarga3.php">Descargar pdf</a></td>
	<td>Romanticismo</td>
	<td><a href="descarga2.php">Descargar pdf</a></td></tr>
<tr>

	</tr>
</table>
</center>
  
  
</body>
</html>