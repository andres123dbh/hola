<!DOCTYPE html>
<html>
<head>
	<title></title>
</head><link rel="stylesheet" href="cssinicio.css" type="text/css">  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="header/assets/css/style.css">
<body>
 <?php require 'header/header.php' ?>
	<script>

function bigImg(x) {
  x.style.height = "200px";
  x.style.width = "250px";
}

function normalImg(x) {
  x.style.height = "150px";
  x.style.width = "200px";
}
</script>

   <center>
   
   		<p><h1>Estudiantes&emsp;&emsp;&emsp;&nbsp;Profesores</h1></p>
   		<a href="estu/index.php">
   		<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="10" border-color="blue" src="estudiantes.jpg"  width="200" height="150">
   	</a>
 
   	&emsp;&emsp;&nbsp;&nbsp;
  
   	
   	<a href="maes/index.php">
   	<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="10" src="profesores.jpg"  width="200" height="150">
   </a>

</center>
</body>
</html>