 <!DOCTYPE html>
<html>
<?php
header_remove('x-powered-by');
ini_set("expose_php", 0);
?>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0,">
	<title>IA Triage+</title>
	<link rel="stylesheet" type="text/css" href="resources/libs/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="resources/js/home.js"></script>

	<style>
		#maindiv { 
		  background: url(resources/image/HospitalBlack.png) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
	</style>
</head>
<body>
<?php
	include 'resources/html/headerLogin.html';
?>

	<div class="row" style="height:85vh" id="maindiv"></div>
	<!-- Modal -->
	<div class="modal fade" id="sModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style="background-color: #CCD5AE">
	        <h5 class="modal-title" id="sModalTitle">Iniciar Sesión</h5>
	        <button type="button" onclick="$('#sModal').modal('hide')" style="padding: 0; border: none; background: none;">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="sModalContent">
	        Error 1001
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" onclick="$('#sModal').modal('hide')">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

<?php
    include("resources/html/footer.html");
?>

</body>
</html> 