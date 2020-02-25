<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	
 /*$n=$_POST['usuario'];
 $a=$_POST['contraseña'];*/

 
 $servidor = "localhost";
 $usuario ="root";
 $pass = "";
$d="usuario";


 $conectar = mysqli_connect($servidor, $usuario, $pass, $d);

 
 if(!$conectar){
 	die("FALLO CONEXION:".mysqli_connect_error());
 }
echo"CONEXION EXITOSA BIENVENIDO!!";


/*
$sql = "CREATE DATABASE goyo";
if (mysqli_query($conectar, $sql)) {
	echo "BASE DE DATOS CREADA EXITOSAMENTE";
} else{
	echo "BASE DE DATOS NO CREADA".mysqli_connect_error($conectar);

}


mysqli_close($conectar);
*/

//ELIMINAR BASE DE DATOS

/*$sql = "DROP DATABASE goyo";
if (mysqli_query($conectar, $sql)) {
    echo "BASE DE DATOS ELIMINADA EXITOSAMENTE";
} else {
    echo "BASE DE DATOS NO ELIMINADA" .mysqli_connect_error($conectar);
}
mysqli_close($conectar);
*/

$sql = "CREATE TABLE usuariomaes
(
id INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
USUARIO VARCHAR(200) NOT NULL,
PASSWORD VARCHAR(200) NOT NULL
)";

/*$sql="INSERT INTO USUARIO (USUARIO,CONTRASEÑA) VALUES('$n','$a')";*/

if (mysqli_query($conectar,$sql)) {
	echo "REGISTRO CREADO";
}
else{
	echo"ERROR AL GENERAR";
}

 
?>
</body>
</html>