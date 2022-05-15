<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0,">
	<title>IA Triage+</title>
	<script type="text/javascript" src="../resources/js/inicioParamedico.js"></script>
</head>
<body>
<?php
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

	include '../resources/html/header.html';
	include_once("../resources/cnx/con_triage.php");
	$base = new Model();
?>
	<div class="container-fluid">
		<div class="row" style="height: 5vh"></div>
		<div class="row justify-content-center">
			<div class="col-md-10" style="background-color: #E9EDC9; border-radius: 15px;margin-bottom: 5vh">
				<div class="row justify-content-center" style="margin-top:15vh">
					<div class="col-md-auto">
						<h3>¿Paciente Identificado?</h3>
					</div>
				</div>
				<div class="row justify-content-center" style="margin-top:2vh; margin-bottom: 10vh">
					<div class="col-md-2 text-center">
						<button type="button" class="btn btn-outline-primary btn-lg" onclick="identificado(1)">SI</button>
					</div>
					<div class="col-md-2 text-center">
						<button type="button" class="btn btn-outline-secondary btn-lg" onclick="identificado(0)">NO</button>
					</div>
				</div>
				<div class="row justify-content-center" style="margin-top:10vh; margin-bottom: 15vh">
					<div class="col-md-auto text-center">
						<button type="button" class="btn btn-danger btn-lg" onclick="emergencia(0)">EMERGENCIA</button>
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