<?php
session_start();
    $contador=0;
    $usuariosJSON=file_get_contents("Usuarios/usuarios.json");
      $datosUsuario=json_decode($usuariosJSON,true);
      while(isset($datosUsuario[$contador])){
      if($datosUsuario[$contador]["mail"]==$_POST["email"]){
        $_SESSION["username"]=$datosUsuario[$contador]["username"];
        $_SESSION["nombre"]=$datosUsuario[$contador]["nombre"];
        $_SESSION["apellido"]=$datosUsuario[$contador]["apellido"];
        $_SESSION["extFoto"]=$datosUsuario[$contador]["extFoto"];
      break;
      }
      $contador++;
    }


    header("Location: inicio.php");exit;

?>