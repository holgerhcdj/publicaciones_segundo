<?php 
  require_once('Publicaciones.php');
  $Publicaciones= new Publicaciones();
  $datos=$_REQUEST;
  $user=$datos['user'];
  $desc=$datos['desc'];
  $estado=$datos['estado'];
  $img=null;
  //Guardo la publicacion
  $Publicaciones->store($user,$desc,$estado,$img);
  //Busco el último ID de registrado
  $last=$Publicaciones->last_id();
  //Busco el registro completo
  $registro=$Publicaciones->show($last[0]['pub_id']);
  echo json_encode($registro);

  

?>