 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0,">
	<title>IA Triage+</title>
	<link rel="stylesheet" type="text/css" href="resources/libs/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="resources/js/home.js"></script>
</head>
<body>
<?php
	include 'resources/html/header.html';
?>

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
	        Error 1001
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#sModal').modal('hide')">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

</body>
</html> 