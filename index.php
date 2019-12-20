<?php
session_start();
if(isset($_SESSION["username"])){
  header("Location: inicio.php");exit;
}
$emailAnt="";
if($_POST){
  $emailAnt=$_POST["email"];
  $validado=include "validacionLogin.php";
  if($validado["exito"]){
    include "iniciarsesion.php";
  }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mavio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="CSS/indexstyles.css?v=<?= time(); ?>">

    <link rel="icon" href="images/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

  </head>
  <body>

<div class="">
  <h1>Mavio</h1>


<img class="logo" src="images/logo.png" alt="logo">

  <form action="index.php" method="post">
    <label for="email">E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input id="email" type="email" name="email" value="<?=$emailAnt?>">
    <br>
    <?php if(isset($validado["errores"]["errorMail"])){echo $validado["errores"]["errorMail"];}?>


    <br>
    <br>

    <label for="password">Contraseña:</label> <input id="password" type="password" name="pass" id="pass">

    <br>
    <?php if(isset($validado["errores"]["errorPassword"])){echo $validado["errores"]["errorPassword"];}?>
    <br>
<small>Recordar usuario</small>
<input class="checkbox" type="checkbox" name="recordar" value="true">
<br>

<input class="boton"type="submit" value="Entrar">

    <!-- <button class="boton" type="button" name="button">Entrar</button> -->

  <?php if(isset($validado["errores"]["errorGeneral"])){echo $validado["errores"]["errorGeneral"];}?>

<br>
<br>

<a class="links" href="registro.php">Registrate</a>

<br>
<br>

<a class="links" href="olvido.php">¿Olvidaste tu contraseña? Hace click acá</a>

<br>
<br>
</form>


</div>



  </body>
</html>
