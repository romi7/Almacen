<?php
require('./misFunciones.php');

function limpiaPalabra($palabra){
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    return $palabra;
}

$mysqli = conectaBBDD();



 $cajaNombre = limpiaPalabra($_POST['cajaNombre']);
 
  $cajaPassword = limpiaPalabra($_POST['cajaPassword']);
  
  //echo 'Has escrito el usuario: '.$cajaNombre.' y la contraseña: '.$cajaPassword;
  
  $resultadoQuery = $mysqli -> query("SELECT * FROM `trabajador` WHERE `usuario` = '$cajaNombre' AND contraseña = $cajaPassword");
  
  //si la consulta existe
  if($resultadoQuery){

  $numUsuarios = $resultadoQuery -> num_rows;
  }
  else{
      $numUsuarios = -1;
  }
  
  
//filtro muy básico para evitar inyeccion SQL 
$cajaPassword = trim($cajaPassword, "'");
$cajaNombre = trim($cajaNombre, "'");
  
//  echo 'Tenemos '.$numPreguntas.' en la base de datos';
//  
//  for ($i = 0; $i < $numPreguntas; $i++){
//      $r = $resultadoQuery -> fetch_array();
//      echo $r['nombreUsuario'].'<br/>';
//      
//  }
 

  
  if ($numUsuarios > 0){
       $r = $resultadoQuery -> fetch_array();
     //en la variable de sesión "nombreUsuario" guardo el nombre de usuario
     $_SESSION['usuario'] = $cajaNombre;
     
     //en la variable de sesión idUsuario guardo el id de usuario leido de la BBDD
//     $_SESSION['idTrabajador'] = $r['idTrabajador'];
 
      //muestro la pantalla de la apliación 
      require  'listaAlmacen.php';
     
  }

  else{
      //muestro una pantalla de error 
      require 'error.php';
  }
  


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */


