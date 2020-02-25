<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
session_start();
if(!isset($_SESSION["usuario"])){
header("Location:login.php");
}
$e=$_SESSION["e"]; 
list($u, $uu) = explode(",", $e);
$h=$_SESSION["h"];
echo $h;
?>
<?php 
 $n=$_POST['nota'];
 $s=$_POST['s'];
/*
  $link = mysqli_connect('localhost', 'root', '');
  if(!$link){
    echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_error();
  }else{
  //Paso 2 es seleccionar la base de datos
    $base = mysqli_select_db($link,'usuario');
    if(!$base){
      echo'No se encontro la base de datos: '.mysqli_error();
    }else{
  //Paso 3 es hacer la sentencia sql y ejecutarla
      $sql = "SELECT * FROM tablamaes";
      $ejecuta_sentencia =mysqli_query($link, $sql) or die (mysqli_error($link)); 
      if(!$ejecuta_sentencia){
        echo'hay un error en la sentencia de sql: '.mysqli_error();
      }else{

      $sql="UPDATE tablamaes
SET '$n'='$s' WHERE Apellido1='$e'";
        if (mysqli_query($link,$sql)) {
	echo "BIEN";
}
else{
	echo"ERROR AL GENERAR";
}
}
}
}*/
 //paso 1 es conectarnos con el servidor //esta manera ya esta obsoleta!!
  $link = mysqli_connect('localhost', 'root', '');
  if(!$link){
    echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_error();
  }else{
  //Paso 2 es seleccionar la base de datos
    $base = mysqli_select_db($link,'usuario');
    if(!$base){
      echo'No se encontro la base de datos: '.mysqli_error();
    }else{
  //Paso 3 es hacer la sentencia sql y ejecutarla
      $sql = "SELECT * FROM $h";
      $ejecuta_sentencia =mysqli_query($link, $sql) or die (mysqli_error($link)); 
      if(!$ejecuta_sentencia){
        echo'hay un error en la sentencia de sql: '.mysqli_error();
      }else{
  //Paso 4 es traer los resultados como un array para imprirlos en pantalla
        $lista_paises = mysqli_fetch_array($ejecuta_sentencia);

      $sql="UPDATE $h
SET $n='$s' WHERE Apellido1='$u' AND Apellido2='$uu' ";
        if (mysqli_query($link,$sql)) {
	header("location:f2.php");
}
else{
	echo"ERROR AL GENERAR";
}
        
      }
    }
  }
echo $e;
 ?>
<body>

</body>
</html>