<?php
  $validado=[
    'validado'=>true,
    'descripcion'=>[
      'errorNombre'=>"",
      'errorApellido'=>"",
      'errorMail'=>"",
      'errorUsername'=>"",
      'errorContraseña'=>"",
      'errorContra'=>"",
      'errorFecha'=>"",
      'errorSexo'=>""
  ]
];
//funciones
function esElUnico($dia,$mes,$año,&$cadena){
    if($dia=="dia"){
    if($mes=="mes"&&$año=="año"){
        $cadena .=", mes y año.";
    }else if($mes=="mes"){
        $cadena .=" y mes.";
    }else if($año=="año"){
        $cadena .=" y año.";
    }else{
        $cadena .=".";
    }
}else{
    if($mes=="mes"&&$año=="año"){
        $cadena .="mes y año.";
    }else if($mes=="mes"){
        $cadena .="mes.";
    }else if($año=="año"){
        $cadena .="año.";
    }else{
        $cadena .=".";
    }
}
}
function busquedaUsuariosJSON($tipo,$elemento){ //username, asdasd
  $contador=0;
  $usuariosJSON=file_get_contents("Usuarios/usuarios.json");
    $datosUsuario=json_decode($usuariosJSON,true);
    while(isset($datosUsuario[$contador])){
    if($datosUsuario[$contador][$tipo]==$elemento){
      return true;
    }
    $contador++;
  }
return false;
}
//

  if($_POST["nombre"]==""&&strlen($_POST["nombre"])<3){
    $validado["descripcion"]['errorNombre']="El nombre no puede estar vacio ni ser menor a 3 caracteres!";
  }else if(strlen($_POST["nombre"])<3){
    $validado["descripcion"]['errorNombre']="El nombre no puede ser menor a 3 caracteres!";
  }

  if($_POST["apellido"]==""&&strlen($_POST["apellido"])<2){
    $validado["descripcion"]['errorApellido']="El apellido no puede estar vacio ni ser menor a 2 caracteres!";
  }else if(strlen($_POST["apellido"])<2){
    $validado["descripcion"]['errorApellido']="El apellido no puede ser menor a 2 caracteres!";
  }

if(filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)){
    $validado["descripcion"]['errorMail']="No es una dirección de correo electrónico válida!";
}else if(busquedaUsuariosJSON("mail",$_POST["mail"])){
    $validado["descripcion"]['errorMail']="Ya existe una cuenta con este correo electronico!";
  }

if($_POST["username"]==""&&strlen($_POST["username"])<5){
    $validado["descripcion"]['errorUsername']="El nombre de usuario no puede estar vacio ni ser menor a 5 caracteres!";
  }else if(strlen($_POST["username"])<5){
    $validado["descripcion"]['errorUsername']="El nombre de usuario no puede ser menor a 5 caracteres!";
  }else if(busquedaUsuariosJSON("username",$_POST["username"])){
      $validado["descripcion"]['errorUsername']="Ya existe una cuenta con este nombre de usuario!";
    }

if($_POST["contraseña"]==""&&strlen($_POST["contraseña"])<8){
    $validado["descripcion"]['errorContraseña']="La contraseña no puede estar vacia ni ser menor a 8 caracteres!";
  }else if(strlen($_POST["contraseña"])<8){
    $validado["descripcion"]['errorContraseña']="La contraseña no puede ser menor a 8 caracteres!";
  }

if($_POST["contra"]!=$_POST["contraseña"]){
    $validado["descripcion"]['errorContra']="La contraseña confirmada no coincide!";
}

if($_POST["dia"]=="dia"||$_POST["mes"]=="mes"||$_POST["año"]=="año"){
    $validado["descripcion"]['errorFecha']="Seleccione el ";
    if($_POST["dia"]=="dia"){
        $validado["descripcion"]['errorFecha'].="día";
    }
    esElUnico($_POST["dia"],$_POST["mes"],$_POST["año"],$validado["descripcion"]['errorFecha']);
    }

    if(!isset($_POST["sexo"])){
        $validado["descripcion"]['errorSexo']="Seleccione su sexo";
    }




foreach($validado["descripcion"] as $tipoError=>$valor){
    if($valor!=""){
        $validado["validado"]=false;
    break;
    }
}

return $validado;

?>