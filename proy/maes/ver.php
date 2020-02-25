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
          $link = mysqli_connect('localhost', 'root', '','usuario');
  if(!$link){
    echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_error();
  }else{

      $sql = "SELECT * FROM $h WHERE  Apellido1='$u' AND Apellido2='$uu' ";
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
      echo "La definitiva del estudiante ".$lista_estu['Apellido1']." ".$lista_estu['Apellido2']." ".$lista_estu['Nombre1']." ".$lista_estu['Nombre2']." ".$lista_estu['Nombre3']." es ".$t;
      
    }
  


  ?>
  <br>



</body>
</html>