<?php
session_start();
if(!isset($_POST["username"])&&!isset($_POST["user"])){
  header("Location: registro.php");exit;
}
if(isset($_SESSION["username"])){
  header("Location: inicio.php");exit;
}
if(isset($_POST["user"])){
$nombreUser=$_POST["user"];
}
if($_FILES){
    include "validacionFoto.php";
    if($validado["exito"]){
      include "upload.php";
      header("Location: felicitaciones.php");exit;
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="CSS/foto.css?v=<?= time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>Mavio</h1>
    </header>
    <section class="principal">
      <p>Llegó el momento de subir una foto de perfil :)</p>
      <form class="" action="foto.php" method="post" enctype="multipart/form-data">
      <input type="file" name="foto" >
      <input type="hidden" name="user" value=<?php if(isset($_POST["username"])){echo $_POST["username"];}else{echo $nombreUser;}?>>
      <button type="submit" value="submit"> Enviar </button>
      </form>
      <?php if(isset($validado["errorFoto"])){echo $validado["errorFoto"];}?>
    </section>
  </body>
</html>
