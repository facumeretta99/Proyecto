<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");exit;
}

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mavio</title>
    <link rel="stylesheet" type="text/css" href="CSS/perfil2styles.css?v=<?= time(); ?>">

    <link rel="icon" href="images/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="titulo">
      <h1>Mavio</h1>

    <nav>
      <ul>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="faq.php">F.A.Q.</a></li>
        <li><a href="#Configuracion">Configuración</a></li>
        <li><a href="cerrarsesion.php">Desconectarse</a></li>
      </ul>
    </nav>

    <img class="pic"src="<?= "Usuarios/FotosPerfil/FotoPerfil@".$_SESSION["username"].".".$_SESSION["extFoto"] ?>" alt="profile">

    <h3 class="Patricio"><?= $_SESSION["nombre"]." ".$_SESSION["apellido"] ?></h3>

<a class="perfil" href="inicio.php">Ir al inicio</a>

    </div>

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

<button type="button" name="button">Enviar</button>

  </body>
</html>
