$(function(){

		$("#submit_post2").click(function(){
				if ($(".form-control").hasClass("invalid")){
			return;
		}
		else{
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
			table.rows[fila].cells[0].innerHTML=id;
			table.rows[fila].cells[1].innerHTML=dia;
			table.rows[fila].cells[2].innerHTML=mes;
			table.rows[fila].cells[3].innerHTML=año;
			table.rows[fila].cells[4].innerHTML=desde;
			table.rows[fila].cells[5].innerHTML=hasta;
			table.rows[fila].cells[6].innerHTML=camp;
			table.rows[fila].cells[7].innerHTML=descr;
		$.post("../PHP/Editar.php",{ID:id, Día:dia, Mes:mes, Año:año, Desde_las:desde, Hasta_las:hasta, Campaña:camp, Descripción:descr},function(resultado){
		$("body").append(resultado);
		$("#id").val("");
		$("#contact_usuario").val("");
		$("#contact_password").val("");
		$("#contact_nombre").val("");
		document.getElementById("contact_apellidos").value="";
		$("#contact_descripcion").val("");
		});
		};
		});
		});