<?php
$contraseñaEncrip=password_hash($_POST["contraseña"],PASSWORD_DEFAULT);
$usuariosJSON=file_get_contents("Usuarios/usuarios.json");
if($usuariosJSON!=""){
$datosUsuario=json_decode($usuariosJSON,true);
}
$datosUsuario[]=[
    "nombre"=>$_POST["nombre"],
    "apellido"=>$_POST["apellido"],
    "username"=>$_POST["username"],
    "mail"=>$_POST["mail"],
    "contraseña"=>$contraseñaEncrip,
    "fechaNacimiento"=>$_POST["dia"]." de ".$_POST["mes"]." del ".$_POST["año"],
    "sexo"=>$_POST["sexo"],
    "extFoto"=>""

];
$datosUsuarioJSON=json_encode($datosUsuario);
file_put_contents("Usuarios/usuarios.json",$datosUsuarioJSON);
?>