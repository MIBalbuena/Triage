 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0,">
	<title>IA Triage+</title>
	<script type="text/javascript" src="resources/js/home.js"></script>

</head>
<body>
<?php
	include '../resources/html/header.html';
	include_once("../resources/cnx/con_triage.php");
	$base = new Model();
?>
	<div class="container-fluid">
		<div class="row" style="height: 5vh"></div>
		<div class="row justify-content-center">
			<div class="col-md-10" style="background-color: #E9EDC9; border-radius: 15px;margin-bottom: 5vh">
				<div class="row justify-content-center" style="margin-top: 20px">
					<div class="col-md-10">
						<div class="row">
							<h4>Datos Paciente</h4>
						</div>
						<div class="row justify-content-center" style="margin-top: 2vh">
							<div class="col-md-4">
								<label for="pac_Name" class="form-label">Nombre</label>
    							<input type="text" class="form-control" id="pac_Name">
							</div>
							<div class="col-md-4">
								<label for="pac_ApPat" class="form-label">Apellido Paterno</label>
    							<input type="text" class="form-control" id="pac_ApPat">
							</div>
							<div class="col-md-4">
								<label for="pac_ApMat" class="form-label">Apellido Materno</label>
    							<input type="text" class="form-control" id="pac_ApMat">
							</div>
						</div>
						<div class="row justify-content-center" style="margin-top: 2vh">
							<div class="col-md-3">
								<label for="pac_NSS" class="form-label">NSS</label>
    							<input type="text" class="form-control" id="pac_NSS">
							</div>
							<div class="col-md-3">
								<label for="pac_Birth" class="form-label">Fecha de Nacimiento</label>
    							<input type="date" class="form-control" id="pac_Birth">
							</div>
							<div class="col-md-3">
								<label for="pac_lst_Sangre" class="form-label">Tipo de Sangre</label>
								<?php
									$sqlSangre = "select * from cat_sangre";
									$rstSangre = $base->consultaDatos($sqlSangre,2);
									echo '
										<select class="form-control" id="pac_lst_Sangre">
											<option value="0">Seleccione...</option>
									';
									foreach($rstSangre as $rowSangre){
										echo '
											<option value="'.$rowSangre['nid_tipo_sangre'].'">'.$rowSangre['cdesc_tipo_sangre'].'</option>
										';
									}
									echo '
										</select>
									';
								?>
							</div>
							<div class="col-md-3">
								<label for="pac_RFC" class="form-label">RFC</label>
    							<input type="text" class="form-control" id="pac_RFC">
							</div>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="row justify-content-center" style="margin-top: 2vh">
							<div class="col-md-2">
								<label for="pac_lst_Genero" class="form-label">Género</label>
								<?php
									$sqlGenero = "select * from cat_genero";
									$rstGenero = $base->consultaDatos($sqlGenero,2);
									echo '
										<select class="form-control" id="pac_lst_Genero">
											<option value="0">Seleccione...</option>
									';
									foreach($rstGenero as $rowGenero){
										echo '
											<option value="'.$rowGenero['nid_genero'].'">'.$rowGenero['cdesc_genero'].'</option>
										';
									}
									echo '
										</select>
									';
								?>
							</div>
							<div class="col-md-2">
								<label for="pac_lst_Sexo" class="form-label">Sexo</label>
								<?php
									$sqlSexo = "select * from cat_sexo";
									$rstSexo = $base->consultaDatos($sqlSexo,2);
									echo '
										<select class="form-control" id="pac_lst_Sexo">
											<option value="0">Seleccione...</option>
									';
									foreach($rstSexo as $rowSexo){
										echo '
											<option value="'.$rowSexo['nid_sexo'].'">'.$rowSexo['cdesc_sexo'].'</option>
										';
									}
									echo '
										</select>
									';
								?>
							</div>
							<div class="col-md-2">
								<label for="pac_reqSangre" class="form-label">Requiere Sangre</label>
    							<select class="form-control" id="pac_lst_reqSangre">
    								<option value="0">Seleccione...</option>
    								<option value="1">SI</option>
    								<option value="2">NO</option>
    							</select>
							</div>
							<div class="col-md-2">
								<label for="pac_Tension" class="form-label">Tensión Arterial</label>
    							<input type="text" class="form-control" id="pac_Tension">
							</div>
							<div class="col-md-2">
								<label for="pac_Oxigenacion" class="form-label">PCO2</label>
    							<input type="text" class="form-control" id="pac_Oxigenacion">
							</div>
							<div class="col-md-2">
								<label for="pac_Temperatura" class="form-label">Temperatura</label>
    							<input type="text" class="form-control" id="pac_Temperatura">
							</div>
						</div>

						<div class="row justify-content-start" style="margin-top: 2vh">
							<div class="col-md-2">
								<label for="pac_Peso" class="form-label">Peso</label>
    							<input type="text" class="form-control" id="pac_Peso">
							</div>
							<div class="col-md-2">
								<label for="pac_Talla" class="form-label">Talla</label>
    							<input type="text" class="form-control" id="pac_Talla">
							</div>
						</div>

						<div class="row justify-content-center" style="margin-top: 2vh">
							<div class="col-md-6">
								<label for="pac_Alergias">Alergias</label>
    							<textarea class="form-control" id="pac_Alergias" rows="3" style="resize: none"></textarea>
							</div>
							<div class="col-md-6">
								<label for="pac_Cronicos">Padecimientos Crónicos</label>
    							<textarea class="form-control" id="pac_Cronicos" rows="3" style="resize: none"></textarea>
							</div>
						</div>

						<div class="row justify-content-center" style="margin-top: 3vh;margin-bottom:3vh">
							<div class="col-md-auto">
								<button type="button" class="btn btn-outline-success">GUARDAR</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	

	<!-- Modal -->
	<div class="modal fade" id="sModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="sModalTitle">Iniciar Sesión</h5>
	        <button type="button" onclick="$('#sModal').modal('hide')" style="padding: 0; border: none; background: none;">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="sModalContent">
	        Error 1101
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#sModal').modal('hide')">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<?php
    	include("../resources/html/footer.html");
	?>

	<script type="text/javascript" src="resources/libs/jQuery-Mask-Plugin/jquery.mask.js"></script>
	<script>
		jQuery(function($){
		    $("#pac_NSS").mask("99-99-99-9999-9");
		});
	</script>

</body>
</html> 