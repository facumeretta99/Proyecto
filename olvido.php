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

    <link rel="stylesheet" type="text/css" href="CSS/olvido.css?v=<?= time(); ?>">
    <link rel="icon" href="images/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

  </head>
  <body>

    <h1>Mavio</h1>
<div id="a">
    <div>
<form class="" action="nuevo.php" method="post">

Nueva contraseña:
<br>
<input type="password" name="pass" value="" required>
<br>
<br>
Repita contraseña:
<br>
<input type="password" name="pass" value="" required>
<br>
<br>
E-mail:
<br>
<input type="email" name="mail" value=""required>
<br>
<br>
<input type="submit" name="Enviar" value="Enviar">

</form>
</div>
</div>
  </body>
</html>
