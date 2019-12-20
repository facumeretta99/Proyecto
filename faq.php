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

    <link rel="stylesheet" type="text/css" href="CSS/faqstyles.css?v=<?= time(); ?>">

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
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="#configuracion">Configuración</a></li>
        <li><a href="cerrarsesion.php">Desconectarse</a></li>
      </ul>
    </nav>



<h2>Preguntas frecuentes</h2>

<h4>♢ ¿Este sitio es gratuito?</h4>
 <p>Sí! Es totalmente gratuito.</p>

 <h4>♢ ¿Dónde puedo encontrar amigos?</h4>
 <p>Encontrar amigos es muy facil! Solamente tenes que ir al inicio y escribir el nombre de quien desees ser amigo en la barra de búsqueda, al lado de la lupa!</p>

 <h4>♢ ¿Qué pasa si no quiero ser amigo de alguien?</h4>
  <p>Simplemente rechaza su invitación de amistad!</p>

  <h4>♢ ¿Dónde puedo comunicar problemas que tenga con el sitio web?</h4>
  <p>Para consultas o problemas dirigite a nuestra sección de contacto para poder comunicarte con nosotros, siempre estamos dispuestos a ayudar, recibír críticas y sugerencias!</p>


  </body>
</html>
