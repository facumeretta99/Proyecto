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
    <link rel="stylesheet" type="text/css" href="CSS/felicitacionesstyles.css?v=<?= time(); ?>">
    <link rel="icon" href="images/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
  </head>
  <body>
    <h1>Mavio</h1>
<div class="">
  <p>Felicitaciones! Ya estas registrado en Mavio!
  <br>
Hace click <a href="index.php">acá</a> y entra a tu cuenta!</p>
</div>
  </body>
</html>
