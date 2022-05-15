function identificado(flag){
	location.href = 'view/inicioRegistro.php';
}

function emergencia(){
	var vaccion = 'EMERGENCIA';
	jQuery.ajax({
		url: 'controller/cParamedico.php',
		type: 'POST',
		dataType: 'json',
		data: {accion:vaccion}
	}).done(function(respuesta){  
		if(respuesta.accion==1){
			Swal.fire("EXITO",respuesta.mensaje,"success");
		}else{
			Swal.fire("ERROR",respuesta.mensaje,"error");
		}
	}).fail(function(respuesta){
		console.log(respuesta);   
	}).always(function(){
		console.log("Done");
	});	
}