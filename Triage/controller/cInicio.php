<?php
session_start();	
$vinactivo = 900; 
if(isset($_SESSION['tiempo']) ) {
	$vida_session = time() - $_SESSION['tiempo'];
	if($vida_session > $vinactivo)
	{
		session_destroy();
		header("Location: ../home.php"); 
	}
}
$_SESSION['tiempo'] = time();

if(!isset($_SESSION['triageUser'])){
	header("Location: ../home.php");
}else{
	$usrClave     = $_SESSION['triageUser'];
	$usrNombre   = $_SESSION['triageNombre'];
	$usrRol = $_SESSION['triageRol'];
}

if($usrRol==1){
	header("Location: ../view/inicioParamedico.php");
}else if($usrRol==2){
	header("Location: ../view/inicioRegistro.php");
}else if($usrRol==3){
	header("Location: ../view/inicioRegistro.php");
}else if($usrRol==4){
	header("Location: ../view/inicioRegistro.php");
}
?>