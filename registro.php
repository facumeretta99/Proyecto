<?php
session_start();
if(isset($_SESSION["username"])){
  header("Location: inicio.php");exit;
}
$meses=["mes","enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
  $nombreAnt="";
  $apellidoAnt="";
  $mailAnt="";
  $usernameAnt="";
  $diaAnt="";
  $mesAnt="";
  $añoAnt="";
  $sexoAnt="";
if($_POST){
  $nombreAnt=$_POST["nombre"];
  $apellidoAnt=$_POST["apellido"];
  $mailAnt=$_POST["mail"];
  $usernameAnt=$_POST["username"];
  $diaAnt=$_POST["dia"];
  $mesAnt=$_POST["mes"];
  $añoAnt=$_POST["año"];
  if(isset($_POST["sexo"])){
  $sexoAnt=$_POST["sexo"];
  }

  include 'validacionRegistro.php';
  if($validado["validado"]){
    include 'registroUsuario.php';
    include 'foto.php';
    exit;
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Registro.css?v=<?= time(); ?>">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>Mavio</h1>
    </header>
    <section class="principal">
      <form class="" action="registro.php" method="post">
        <br>
        <p>
          <label for="nombre">Nombre:</label><br>
          <input type="text" name="nombre" value="<?= $nombreAnt ?>" id="nombre">
          <?php if(isset($validado["descripcion"]['errorNombre'])){echo $validado["descripcion"]['errorNombre'];};?>
        </p>
        
        <p>
          <label for="apellido">Apellido:</label><br>
          <input type="text" name="apellido" value="<?= $apellidoAnt ?>" id="apellido">
          <?php if(isset($validado["descripcion"]['errorApellido'])){echo $validado["descripcion"]['errorApellido'];};?>
        </p>

        <p>
          <label for="mail">Correo electrónico:</label><br>
          <input type="email" name="mail" value="<?= $mailAnt ?>" id="mail">
          <?php if(isset($validado["descripcion"]['errorMail'])){echo $validado["descripcion"]['errorMail'];};?>
        </p>
        <p>
          <label for="username">Nombre de usuario:</label><br>
          <input type="text" name="username" value="<?= $usernameAnt ?>" id="username" >
          <?php if(isset($validado["descripcion"]['errorUsername'])){echo $validado["descripcion"]['errorUsername'];};?>
        </p>
        <p>
          <label for="contraseña">Contraseña:</label><br>
          <input type="password" name="contraseña" value="" id="contraseña">
          <?php if(isset($validado["descripcion"]['errorContraseña'])){echo $validado["descripcion"]['errorContraseña'];};?>
        </p>
        <p>
          <label for="contra">Confirmar contraseña:</label><br>
          <input type="password" name="contra" value="" id="contra">
          <?php if(isset($validado["descripcion"]['errorContra'])){echo $validado["descripcion"]['errorContra'];};?>
  
          <div id="fecha">
          <p class="fdn">
          Fecha de Nacimiento:<br>
          <label id="dia" for="dia">Día</label>
          <select class="" name="dia" id="dia" >
            <option value="dia" 
          <?php if($diaAnt=="dia"){echo "selected";}?>
          >Día</option>
          
          <?php for($i=1;$i<=31;$i++){?>
            <option value=<?php echo $i;?> <?php if($diaAnt==$i){echo "selected";}?> > <?php echo $i;}?> </option>
          </select>

          <label id="mes" for="mes">Mes:</label>
          <select class="" name="mes" id="mes" >
          <option value="mes" 
          <?php if($mesAnt==$meses[0]){echo "selected";}?>
          >Mes</option>

          <?php for($i=1;$i<=12;$i++){?>
            <option value=<?php echo $meses[$i];?> <?php if($mesAnt==$meses[$i]){echo "selected";}?> > <?php echo $meses[$i];}?> </option>

          </select>
          <label id="año" for="año">Año:</label>
          <select class="" name="año" id="año">
            <option value="año" 
          <?php if($añoAnt=="año"){echo "selected";}?>
          >Año</option>
          
          <?php for($i=2019;$i>=1980;$i--){?>
            <option value=<?php echo $i;?> <?php if($añoAnt==$i){echo "selected";}?> > <?php echo $i;}?> </option>
          </select>
          <br>
          <?php if(isset($validado["descripcion"]['errorFecha'])){echo $validado["descripcion"]['errorFecha'];};?>
        </p>
          </div>
        <p>
          <label for="sexo">Sexo:</label><br>
          <input type="radio" name="sexo" value="mujer" <?php if($sexoAnt=="mujer"){echo "checked";}?>>Mujer
          <input type="radio" name="sexo" value="hombre" <?php if($sexoAnt=="hombre"){echo "checked";}?>>Hombre
          <input type="radio" name="sexo" value="otro" <?php if($sexoAnt=="otro"){echo "checked";}?>>Otro
          <br>
          <?php if(isset($validado["descripcion"]['errorSexo'])){echo $validado["descripcion"]['errorSexo'];};?>
        </p>
<p>
<label for="check">Recordar usuario</label>
<input class="checkbox" type="checkbox" name="recordar" value="true" id="check">
</p>
        <p>
          <input type="submit" name="button">
        </p>
        <p>
          <button type="reset" name="button">Reiniciar</button>
        </p><br>
      </form>
    </section>
  </body>
</html>
