$(document).ready(function(){
$(function(){
		$("#reg").click(function(){//registro
			var nombre=$("#contact_nombre").val();
			var apellido=$("#contact_apellidos").val();
			var usuario=$("#contact_usuario").val();
			var contrasena=$("#contact_password").val();
			var correo=$("#contact_email").val();
			var a = document.getElementById("contact_descripcion");
			var strUser = a.options[a.selectedIndex].text;
			var camp=strUser;
		if ($(".form-control").hasClass("invalid")){
			return;
		}
		else{
		$.post("../PHP/Registro.php",{Nombre:nombre, Apellidos:apellido, Usuario:usuario, Contraseña:contrasena, Email:correo, Autorización:camp},function(data){
		$('body').html(data);
		$("#contact_nombre").val("");
		$("#contact_apellidos").val("");
		$("#contact_usuario").val("");
		$("#contact_password").val("");
		$("#contact_email").val("");
		document.getElementById("contact_descripcion").value="";
	});
	};
	});
});
});