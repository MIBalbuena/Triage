<?php
session_start();
$usrClave     = $_SESSION['triageUser'];
$usrNombre   = $_SESSION['triageNombre'];
$usrRol = $_SESSION['triageRol'];
include_once("../resources/cnx/con_triage.php");
$base = new Model();
$vaccion = $_POST['accion'];

if($vaccion=="GUARDAR_REGISTRO"){

}

echo json_encode($respuesta);	
?>