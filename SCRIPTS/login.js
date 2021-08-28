$(document).ready(function(){
	$(function(){
		$("#log").click(function(){//login
			var usuario=$("#contact_usuario").val();
			var contrasena=$("#contact_password").val();
		if ($(".form-control").hasClass("invalid")){
			return;
		}
		else{
		$.post("../PHP/Login.php",{Usuario:usuario, Contraseña:contrasena},function(data){
		$('#meow').html(data);
		$("#contact_usuario").val("");
		$("#contact_password").val("");
	});
	};
	});
});
});