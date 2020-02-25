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

  <?php require 'header2/header.php' ?>
  <h1>Ver Notas</h1><br>
      <form action="tablanotasestu.php" method="POST">

  <select  name="h">
  	<option >Seleccione su Materia</option>
  	<option  value="tablamaes">Matematica</option>
  	<option  value="informatica" >Informatica</option>
  	<option  value="espanol">Español</option>
  </select><br>
      <input type="submit" value="Enviar">
    </form>
</body>
</html>