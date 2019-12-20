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

    <link rel="stylesheet" type="text/css" href="CSS/graciasstyles.css?v=<?= time(); ?>">

    <link rel="icon" href="images/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

  </head>
  <body>

    <div class="titulo">

      <img class="pic"src="<?= "Usuarios/FotosPerfil/FotoPerfil@".$_SESSION["username"].".".$_SESSION["extFoto"] ?>" alt="profile">

      <h3 class="Patricio"><?= $_SESSION["nombre"]." ".$_SESSION["apellido"] ?></h3>

      <a class="perfil" href="#Perfil">Ir al perfil</a>

    <h1>Mavio</h1>

    <nav>
      <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="#Configuracion">Configuración</a></li>
        <li><a href="faq.php">F.A.Q.</a></li>
        <li><a href="index.php">Desconectarse</a></li>
      </ul>
    </nav>

    </div>

    <div class="texto">

<p>Gracias por tu mensaje! Para volver al inicio hace clic <a href="inicio.php">acá</a>.</p>

    </div>

  </body>
</html>
