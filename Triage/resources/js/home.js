function showModal(){
	$('#sModalTitle').text("Iniciar Sesión");
	$('#sModal').modal({backdrop: 'static', keyboard: false})
	formSesion();
	$("#sModal").modal('show');
}

function formSesion(){
	var vaccion = 'FORMULARIO_SESION';
	jQuery.ajax({
		url: 'controller/cHome.php',
		type: 'POST',
		dataType: 'json',
		data: {accion:vaccion}
	}).done(function(respuesta){  
		if(respuesta.accion==1){
			$('#sModalContent').html(respuesta.mensaje);
		}else{

		}
	}).fail(function(respuesta){
		console.log(respuesta.mensaje);   
	}).always(function(){
		console.log("Done");
	});	
}

function sesValida(){
	location.href = 'view/inicio.php';
}
