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
    <link rel="stylesheet" type="text/css" href="est.css">

  <?php require 'header3/header.php' ?>
    Elija el estudiante para ver definitiva:<br>
   

    <form method="post" action="ver.php">
    	  <select  name="e">
    <option >Elija el estudiante</option>
    <option  value="Aparicio,Trujillo">1.Aparicio Trujillo Jenifer Sofia</option>
    <option  value="Ariza,Arenas">2.Ariza Arenas Kevin Santiago</option>
    <option  value="Ayala,Galindo" >3.Ayala Galindo Maria Paula</option>
    <option  value="Bermudez,Joya" >4.Bermudez Joya Juan Sebastian</option>
    <option  value="Bonilla,Higuera">5.Bonilla Higuera Andres David</option>
    <option  value="Duarte,Siza">6.Duarte Siza Danna Gabriela</option>
    <option  value="Ferro,Nino">7.Ferro Niño Fabian Mauricio</option>
    <option  value="Florez,Martinez">8.Florez Martinez Valentina</option>
    <option  value="Garcia,Castillo">9.Garcia Castillo Giselle Valeria</option>
    <option  value="Herrera,Lopez">10.Herrera Lopez Milen Valeria</option>
    <option  value="Leon,Barrientos">11.Leon Barrientos Laura Daniela</option>
    <option  value="Martinez,Perez">12.Martinez Perez Santiago Alexander</option>
    <option  value="Martinez,Lozada">13.Martinez Lozada Veronica</option>
    <option  value="Mendoza,Gomez">14.Mendoza Gomez Ivonne Alejandra</option>
    <option  value="Monsalve,Rodriguez">15.Monsalve Rodriguez Valentina</option>
    <option  value="Morelo,Ribero">16.Morelo Ribero Maria Camila</option>
    <option  value="Moreno,Jaimes">17.Moreno Jaimes Luis Mateo</option>
    <option  value="Ortiz,Chaparro">18.Ortiz Chaparro Maria Valentina</option>
    <option  value="Osorio,Chavez">19.Osorio Chavez Maria Violeta De Abril</option>
    <option  value="Porras,Santamaria">20.Porras Santamaria Juan Jose</option>
    <option  value="Ramirez,Ramirez">21.Ramirez Ramirez Juan Esteban</option>
    <option  value="Ramirez,Vargas">22.Ramirez Vargas Maria Camila</option>
    <option  value="Reyes,Landazabal">23.Reyes Landazabal Santiago</option>
    <option  value="Rodriguez,Redondo">24.Rodriguez Redondo Juan Camilo</option>
    <option  value="Saavedra,Rodriguez">25.Saavedra Rodriguez Diego Alejandro</option>
    <option  value="Saavedra,Suarez">26.Saavedra Suarez Andres Felipe</option>
    <option  value="Santos,Maldonado">27.Santos Maldonado Karen Julieth</option>
    <option  value="Suarez,Moreno">28.Suarez Moreno Daniel</option>
    <option  value="Suarez,Rangel">29.Suarez Rangel Santiago</option>
    <option  value="Villamizar,Duran">30.Villamizar Duran Alejandra</option>
    <option  value="Villamizar,Torrado">31.Villamizar Torrado Valentina</option>
    <option  value="Villareal,Campo">32.Villareal Campo Javier Felipe</option>
    <option  value="Zafra,Alquichire">33.Zafra Alquichire Adriana Valentina</option>
    
  </select><br>
          <input type="submit" name="n" value="Ingresar">
    </form>



</body>
</html>