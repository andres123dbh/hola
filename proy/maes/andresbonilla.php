<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="est.css">

  <?php require 'header3/header.php' ?>
    <?php 
 session_start();
if(!isset($_SESSION["usuario"])){
header("Location:login.php");
}
$_SESSION["e"]=$_POST["e"];
$e=$_SESSION["e"];
list($u, $uu) = explode(",", $e);
$h=$_SESSION["h"];



 ?>

 <?php 
//$e=$_POST["e"];
echo "El estudiante al cualusted le modificara la nota es ".$u." ".$uu;

  ?>
  <br>
   <form method="post" action="cambinota.php">
  <select  name="nota">
  	<option >Seleccione Habilidad que cambiara</option>
  	<option  value="Hab1">Hab1</option>
  	<option  value="Hab2" >Hab2</option>
  	<option  value="Hab3">Hab3</option>
  	<option  value="Hab4">Hab4</option>
  	<option  value="Recursos">Recursos</option>
  	<option  value="Acumulativo">Acumulativo</option>
  	<option  value="PruebaSaber">Prueba Saber</option>
  	<option  value="SocioAfectiva">Socio Afectiva</option>
  </select>
  

 <input type="text" id="s" name="s" placeholder="Dijite Valor Nota" class="estudiante" /><br>

  <input type="submit" name="b" value="Siguiente">
  </form>


</body>
</html>