<?php
$estado=[
    "exito"=>true,
    "errores"=>[
        "errorMail"=>"",
        "errorPassword"=>"",
        "errorGeneral"=>""
    ]
    ];
function validacionUsuario($email,$password,$estado){ //username, asdasd
    $contador=0;
  $usuariosJSON=file_get_contents("Usuarios/usuarios.json");
    $datosUsuario=json_decode($usuariosJSON,true);
    while(isset($datosUsuario[$contador])){
    if($datosUsuario[$contador]["mail"]==$email&&password_verify($password,$datosUsuario[$contador]["contraseña"])){
      return $estado;
    }
    $contador++;
  }
if($email!=""&&$password!=""){
$estado["errores"]["errorGeneral"]="El email o la contraseña son incorrectos!";
}else{
    if($email==""){
        $estado["errores"]["errorMail"]="No escribió una dirección de correo electrónico!";
    }
    if($password==""){
      $estado["errores"]["errorPassword"]="No escribió la contraseña!";
    }   
}
$estado["exito"]=false;
return $estado;
}

return validacionUsuario($_POST["email"],$_POST["pass"],$estado);
?>