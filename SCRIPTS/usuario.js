$(document).ready(function(){
	var usuario=window.location.hash.substring(1);
	console.log(usuario);
	$.post("../PHP/BotonRegisAutorizacion.php",{Usuario:usuario},function(resultado){
		$("#prueba").append(resultado);
});
});
