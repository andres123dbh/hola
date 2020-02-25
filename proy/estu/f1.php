<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 session_start();
 if(!isset($_SESSION["usuario"]) and !isset($_SESSION["usuario2"]) ){
header("Location:login.php");
}
$u=$_SESSION["usuario"];
$uu=$_SESSION["usuario2"];
 ?>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="est.css">

  <?php require 'header/header.php' ?>
<?php 
$u=$_SESSION["usuario"];
$uu=$_SESSION["usuario2"];
echo "<h1>"."Bienvenido Estudiante ".$u." ".$uu."</h1>";
 ?>

</body>
</html>