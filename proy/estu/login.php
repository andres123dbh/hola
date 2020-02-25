

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar sesión</h1>
    <span><!--o <a href="signup.php">Regístrate</a></span>-->

    <form action="comprueba_login.php" method="POST">
      <input name="USUARIO" type="text" placeholder="Introduce tu Primer Apellido">
      <input name="USUARIO2" type="text" placeholder="Introduce tu Segundo Apellido">
      <input name="PASSWORD" type="password" placeholder="Ingresa tu contraseña">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
