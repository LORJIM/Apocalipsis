$(function(){
		$("#submit_post3").click(function(){
			table.deleteRow(fila);
			var id=$("#id").val();
				dia=$("#contact_usuario").val().substring(0,2);
				mes=$("#contact_usuario").val().substring(3,5);
				año=$("#contact_usuario").val().substring(6,10);
				desde=$("#contact_password").val();
				hasta=$("#contact_nombre").val();
				e = document.getElementById("contact_apellidos");
				strUser = e.options[e.selectedIndex].text;
				camp=strUser;
				descr=$("#contact_descripcion").val();
		$.post("../PHP/Eliminar.php",{ID:id, Día:dia, Mes:mes, Año:año, Desde_las:desde, Hasta_las:hasta, Campaña:camp, Descripción:descr},function(resultado){
		$("body").append(resultado);
		$("#id").val("");
		$("#contact_usuario").val("");
		$("#contact_password").val("");
		$("#contact_nombre").val("");
		document.getElementById("contact_apellidos").value="";
		$("#contact_descripcion").val("");
		});
		});

		})