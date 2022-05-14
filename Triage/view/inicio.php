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
?>
	<div class="container-fluid">
		<div class="row" style="height: 5vh"></div>
		<div class="row justify-content-center">
			<div class="col-md-10" style="background-color: #FEFAE0; border-radius: 15px; height:85vh">
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
							<div class="col-md-3">
								<label for="pac_ApPat" class="form-label">Apellido Paterno</label>
    							<input type="text" class="form-control" id="pac_ApPat">
							</div>
							<div class="col-md-3">
								<label for="pac_ApMat" class="form-label">Apellido Materno</label>
    							<input type="text" class="form-control" id="pac_ApMat">
							</div>
						</div>
						<div class="row justify-content-center" style="margin-top: 2vh">
							<div class="col-md-4">
								<label for="pac_NSS" class="form-label">NSS</label>
    							<input type="text" class="form-control" id="pac_NSS">
							</div>
							<div class="col-md-3">
								<label for="pac_Birth" class="form-label">Fecha de Nacimiento</label>
    							<input type="date" class="form-control" id="pac_Birth">
							</div>
							<div class="col-md-3">
								<label for="pac_BloodType" class="form-label">Tipo de Sangre</label>
    							<input type="text" class="form-control" id="pac_BloodType">
							</div>
						</div>
					</div>
				</div>

				<div class="row justify-content-center" style="margin-top: 20px">
					<div class="col-md-10">
						<div class="row">
							<h4>Síntomas Paciente</h4>
						</div>
						<div class="row justify-content-center" style="margin-top: 2vh">
							<div class="col-md-4">
								<label for="pac_Name" class="form-label">Nombre</label>
    							<input type="text" class="form-control" id="pac_Name">
							</div>
							<div class="col-md-3">
								<label for="pac_ApPat" class="form-label">Apellido Paterno</label>
    							<input type="text" class="form-control" id="pac_ApPat">
							</div>
							<div class="col-md-3">
								<label for="pac_ApMat" class="form-label">Apellido Materno</label>
    							<input type="text" class="form-control" id="pac_ApMat">
							</div>
						</div>
						<div class="row justify-content-center" style="margin-top: 2vh">
							<div class="col-md-4">
								<label for="pac_NSS" class="form-label">NSS</label>
    							<input type="text" class="form-control" id="pac_NSS">
							</div>
							<div class="col-md-3">
								<label for="pac_Birth" class="form-label">Fecha de Nacimiento</label>
    							<input type="date" class="form-control" id="pac_Birth">
							</div>
							<div class="col-md-3">
								<label for="pac_BloodType" class="form-label">Tipo de Sangre</label>
    							<input type="text" class="form-control" id="pac_BloodType">
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

	<script type="text/javascript" src="resources/libs/jQuery-Mask-Plugin/jquery.mask.js"></script>
	<script>
		jQuery(function($){
		    $("#pac_NSS").mask("99-99-99-9999-9");
		});
	</script>

</body>
</html> 