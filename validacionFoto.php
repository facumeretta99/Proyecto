<?php
$validado=[
    "exito"=>true,
    "errorFoto"=>""
  ];
function extensionImagen($tipoExtension){
if(strstr($tipoExtension,"image")){
    return true;
}
return false;
}

if($_FILES["foto"]["tmp_name"]!=""){
if(getimagesize($_FILES["foto"]["tmp_name"])==0||!extensionImagen($_FILES["foto"]["type"])){
    $validado["errorFoto"]="El archivo que subió no es una imagen o su extensión no es del tipo imagen";
}
}

switch($_FILES["foto"]["error"]){
case '0':
    break;
case '1': 
    $validado["errorFoto"]="La foto que subió excede el tamaño maximo (2 mb)";
    break;
case '3':
    $validado["errorFoto"]="La foto no llegó a subirse completamente, intentelo de nuevo!";
    break;
case '4':
    $validado["errorFoto"]="No subió ningún archivo";
    break;
default:
    $validado["errorFoto"]="Error del servidor. Reportelo a los administradores";
}

if($validado["errorFoto"]!=""){
    $validado["exito"]=false;
}

?>