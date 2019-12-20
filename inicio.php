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

    <link rel="stylesheet" type="text/css" href="CSS/iniciostyles.css?v=<?= time(); ?>">

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

<img class="pic"src= <?= "Usuarios/FotosPerfil/FotoPerfil@".$_SESSION["username"].".".$_SESSION["extFoto"] ?> alt="profile">

<h3 class="Patricio"><?= $_SESSION["nombre"]." ".$_SESSION["apellido"] ?></h3>

<a class="perfil" href="perfil2.php">Ir al perfil</a>

</div>

<div class="texto">

 <h2>Sobre Mavio</h2>

 <p>Mavio es la nueva red social donde vas a poder estar mas conectado que nunca con tus amigos en cualquier lado! Compartí fotos, música y videos con un solo click! Siempre estamos abiertos a nuevas sugerencias y buscamos fuertemente expandir nuestra comunidad, bienvenido a Mavio!</p>

</div>

<div class="lateral">

  <h3 class="amigos">Amigos</h3>

<span class="dotal"></span>
<br>
<span class="dotli"></span>
<br>
<span class="dotma"></span>
<br>
<span class="dotto"></span>

  <img class="imgal"src="images/alberto.jpg" alt="alberto" height="64px" width="64px">
<br>
  <img class="imgli"src="images/lila.jpeg" alt="lila" height="64px" width="64px">
<br>

  <img class="imgma"src="images/martin.jpg" alt="martin" height="64px" width="64px">
  <br>
  <img class="imgto"src="images/tomas.png" alt="tomas" height="64px" width="64px">

<h3 class="alberto">Alberto Lopez</h3>
<h3 class="lila">Lila Sanchez</h3>
<h3 class="martin">Martin Castro</h3>
<h3 class="tomas">Tomas Fernandez</h3>

  <h4 class="buscar">Buscar amigos</h4>

  <img class="lupa"src="images/lupa.png" alt="lupa" height="100px" width="100px">
  <input type="text" name="buscar" value="">
  <button type="button" name="button">Buscar</button>

</div>

<div class="boxto">
  <img class="postto"src="images/tomas.png" alt="tomasito">
  <h5>19/11/19  14:30pm</h5>
<h6>Que buen videooooooo!</h6>
<iframe width="560" height="315" src="https://www.youtube.com/embed/D-UmfqFjpl0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<img class="postli"src="images/lila.jpeg" alt="lilita" height="49px" width="49px">
<div class="boxli">
<h5>19/11/19  14:35pm</h5>
<h6>Otra clienta satisfecha <3 </h6>
  <img src="images/dedos.jpg" alt="dedos">
</div>

<div class="boxal">
  <img class="postal"src="images/alberto.jpg" alt="albertito" height="49px" width="49px">
<h5>19/11/19  15:30pm</h5>
<h6>Lindas vacaciones.</h6>
<img src="images/playa.jpg" alt="playa">
</div>


  </body>
</html>
