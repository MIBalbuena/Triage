<?php
session_start();
$usrClave     = $_SESSION['triageUser'];
$usrNombre   = $_SESSION['triageNombre'];
$usrRol = $_SESSION['triageRol'];
include_once("../resources/cnx/con_triage.php");
$base = new Model();
$vaccion = $_POST['accion'];

if($vaccion == "EMERGENCIA"){
	$sqlPaciente = "insert into tbl_pacientes (nid_sexo,nid_genero,nid_tipo_sangre) values (3,4,9)";
	$rstPaciente = $base->consultaDatos($sqlPaciente,3);

	if($rstPaciente>0){
		$sqlIDPaciente = "select last_insert_id() as idPaciente";
		$rstIDPaciente = $base->consultaDatos($sqlIDPaciente,1);
		$idPaciente = $rstIDPaciente['idPaciente'];
		$sqlEstatus = "insert into tbl_estatus_paciente (nid_paciente,nid_triage) values ($idPaciente,1)";
		$rstEstatus = $base->consultaDatos($sqlEstatus,3);

		if($rstEstatus>0){
			$respuesta['accion']=1;
			$respuesta['mensaje']='Se ha generado la alerta de emergencia.';
		}else{
			$respuesta['accion']=0;
			$respuesta['mensaje']="Error en la plataforma, no se pudo generar la alerta";
		}
	}
}

echo json_encode($respuesta);	
?>