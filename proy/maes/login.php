

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="est.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar sesión</h1>
    <span></span>

    <form action="comprueba_login.php" method="POST">
      <input name="USUARIO" type="text" placeholder="Introduce tu cuenta asignada">
      <input name="PASSWORD" type="password" placeholder="Ingresa tu contraseña">
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
