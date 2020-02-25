<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 session_start();
 if(!isset($_SESSION["usuario"])){
header("Location:login.php");
}
$h=$_SESSION["h"];

 ?>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  <?php require 'header/header.php' ?>
<h1>Bienvenido Maestro</h1><br>



</body>
</html>