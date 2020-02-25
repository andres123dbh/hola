<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['USUARIO']) && !empty($_POST['PASSWORD'])) {
    $sql = "INSERT INTO usuarioestu (USUARIO, PASSWORD) VALUES (:USUARIO, :PASSWORD)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':USUARIO', $_POST['USUARIO']);
    $PASSWORD = $_POST['PASSWORD'];
    $stmt->bindParam(':PASSWORD', $PASSWORD);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito.';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta.';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Regístrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Regístrate</h1>
    <span>o <a href="login.php">Iniciar sesión</a></span>

    <form action="signup.php" method="POST">
      <input name="USUARIO" type="text" placeholder="Introduce tu correo electrónico">
      <input name="PASSWORD" type="PASSWORD" placeholder="Ingresa tu contraseña">
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
