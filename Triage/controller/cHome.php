<?php

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
						<button type="button" class="btn btn-outline-danger" onclick="sesValida()">Iniciar Sesión</button>
					</div>
				</div>
			</div>
		</div>
	';

	$respuesta['accion']=1;
	$respuesta['mensaje']=$form;
}

echo json_encode($respuesta);	
?>