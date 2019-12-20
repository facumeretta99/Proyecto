<?php
$ext=pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION);
$dirFoto = dirname(__FILE__)."/Usuarios/FotosPerfil/FotoPerfil@".$nombreUser.".".$ext;
move_uploaded_file($_FILES["foto"]["tmp_name"], $dirFoto);

$contador=0;
$usuariosJSON=file_get_contents("Usuarios/usuarios.json");
$datosUsuario=json_decode($usuariosJSON,true);
$datosUsuario[count($datosUsuario)-1]["extFoto"]=$ext;
$usuariosJSON=json_encode($datosUsuario);
file_put_contents("Usuarios/usuarios.json",$usuariosJSON);
?>