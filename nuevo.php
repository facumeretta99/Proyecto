<?php
session_start();
if(isset($_SESSION["username"])){
  header("Location: inicio.php");exit;
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mavio</title>

    <link rel="stylesheet" type="text/css" href="CSS/nuevo.css?v=<?= time(); ?>">
    <link rel="icon" href="images/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
  </head>
  <body>

    <h1>Mavio</h1>
<div class="">

<p>Su contraseña ha sido cambiada.
<br>
Para volver a la página de ingreso, hace click <a href="index.php">acá</a>.</p>

</div>
  </body>
</html>
