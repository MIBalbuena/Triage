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
	var vaccion = "VALIDA";
	var vus = $('#ses_User').val();
	var vco = $('#ses_Pass').val();
	var missinginfo = '';

	if ((/^\s+$/.test(vus)) || (vus.length == 0)){
	    missinginfo += "<br> El campo <b>USUARIO</b> es requerido";
	}
	if ((/^\s+$/.test(vco)) || (vco.length == 0)){
	    missinginfo += "<br> El campo <b>CONTRASEÑA</b> es requerido";
	} 

	if(missinginfo==''){
		jQuery.ajax({
			url: 'controller/cHome.php',
			type: 'POST',
			dataType: 'json',
			data: {accion:vaccion,us:vus,co:vco}
		}).done(function(respuesta){  
			if(respuesta.accion==1){
					location.href = 'controller/cInicio.php';
			}else{
				Swal.fire("ERROR",'Los datos de acceso no son válidos',"error");
			}
		}).fail(function(respuesta){
			console.log(respuesta);   
		}).always(function(){
			console.log("Done");
		});	
	}else{
		Swal.fire("ERROR",missinginfo,"error");
	}
}
