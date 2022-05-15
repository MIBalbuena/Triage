<?php
include_once("../resources/cnx/con_triage.php");
$base = new Model();
$vaccion = $_POST['accion'];

if($vaccion == "FORMULARIO_SESION"){
	$form = '
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row justify-content-center">
					<label for="ses_User" class="form-label">Usuario</label>
    				<input type="text" class="form-control" id="ses_User">
				</div>
				<div class="row justify-content-center">
					<label for="ses_Pass" class="form-label">Contraseña</label>
    				<input type="password" class="form-control" id="ses_Pass">
				</div>
				<div class="row justify-content-center" style="margin-top: 20px">
					<div class="col-md-5">
						<button type="button" class="btn btn-outline-primary" onclick="sesValida()">Iniciar Sesión</button>
					</div>
				</div>
			</div>
		</div>
	';

	$respuesta['accion']=1;
	$respuesta['mensaje']=$form;
}

else if($vaccion == "VALIDA"){
	$vus = $_POST['us'];
	$vco = $_POST['co'];

	$sqlUser = "select count(*) as existe from tbl_usuarios where cmote_usuario = '$vus'";
	$rstUser = $base->consultaDatos($sqlUser,1);
	$existe = $rstUser['existe'];

	if($existe>0){
		$sqlPass = "select * from tbl_usuarios where cmote_usuario = '$vus'";
		$rstPass = $base->consultaDatos($sqlPass,1);
		$pss = $rstPass['ccontrasena_usuario'];
		$mpass = md5($vco);
		if($mpass==$pss){
			if (session_start()){
				$_SESSION['tiempo'] = time();
				$_SESSION['triageUser']     = $rstPass['nid_rol'];
				$_SESSION['triageNombre'] = $rstPass['cnombre_usuario'];
				$_SESSION['triageRol']   = $rstPass['nid_rol'];

				$resultado['accion']=1;
				$resultado['mensaje'] = "Ingreso correcto";		
			}else{
				$resultado['accion']=1;
				$resultado['mensaje'] = "Error desconocido.";			
			}

			$respuesta['accion']=1;
			$respuesta['mensaje']=$rstPass['nid_rol'];
			$respuesta['mensaje2']=$rstPass['nid_usuario'];
		}else{
			$respuesta['accion']=0;
		}
	}else{
		$respuesta['accion']=0;
	}
}

echo json_encode($respuesta);	
?>