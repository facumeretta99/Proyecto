<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");exit;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="CSS/Perfil.css?v=<?= time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>Mavio</h1>
    </header>
    <div class="nav1">
      <article class="inicio">
        <a href="inicio.php">Inicio</a>
      </article>
      <article class="amigos">
        <a href="#">Amigos</a>
      </article>
      <article class="configuracion">
        <a href="#">Configuración</a>
      </article>
      <article class="sesion">
        <a href="cerrarsesion.php">Cerrar sesión</a>
      </article>
    </div><br>
    <div class="info">
      <article class="infodiv">
        <img src="<?= "Usuarios/FotosPerfil/FotoPerfil@".$_SESSION["username"].".".$_SESSION["extFoto"] ?>" class="pic" alt="Foto de perfil">
      </article>
      <article class="infodiv">
        <h2><?= $_SESSION["nombre"]." ".$_SESSION["apellido"] ?></h2>
      </article>
      <article class="infodiv">
        <a href="#"><h6>Actualizar<br>información</h6></a>
      </article>
    </div><br><br>
    <div class="nav2">
      <article class="nav22">
        <a href="#">Biografía</a>
      </article>
      <article class="nav22">
        <a href="#">Información</a>
      </article>
    </div>
    <div class="subir">
      <label for="comentarios"><h3>¿Cómo estas hoy?</h3></label>
      <textarea name="comentarios" rows="8" cols="80" id="comentarios"></textarea>
    </div>
    <div class="posteos">

    </div>
  </body>
</html>
