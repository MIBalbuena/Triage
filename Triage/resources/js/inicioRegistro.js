function guardarRegistro(){
	var vNombre = $('#pac_Name');
	var vApellidoP = $('#pac_ApPat');
	var vApellidoM = $('#pac_ApMat');
	var vNSS = $('#pac_NSS');
	var vNacimiento = $('#pac_Birth');
	var vTipoSangre = $('#pac_lst_Sangre');
	var vRFC = $('#pac_RFC');
	var vGenero = $('#pac_lst_Genero');
	var vSexo = $('#pac_lst_Sexo');
	var vReqSangre = $('#pac_lst_reqSangre');
	var vTension = $('#pac_Tension');
	var vOxigenacion = $('#pac_Oxigenacion');
	var vTemperatura = $('#pac_Temperatura');
	var vPeso = $('#pac_Peso');
	var vTalla = $('#pac_Talla');
	var vAlergias = $('#pac_Alergias');
	var vCronicos = $('#pac_Cronicos');

	if (vTipoSangre==0){
	    vTipoSangre = 9;
	}
	if (vGenero==0){
	    vGenero = 4;
	}
	if (vSexo==0){
	    vSexo = 3;
	}
	if (vReqSangre!=1){
	    vReqSangre = 0;
	}
	
	/*var vaccion = 'GUARDAR_REGISTRO';
	jQuery.ajax({
		url: 'controller/cHome.php',
		type: 'POST',
		dataType: 'json',
		data: {accion:vaccion, }
	}).done(function(respuesta){  
		if(respuesta.accion==1){
			$('#sModalContent').html(respuesta.mensaje);
		}else{

		}
	}).fail(function(respuesta){
		console.log(respuesta.mensaje);   
	}).always(function(){
		console.log("Done");
	});	*/
}