var table=document.getElementById("table");
$(document).ready(function(){
	$("#contact_usuario").datepicker("option", "dateFormat", "dd/mm/yy").val();
	$("#contact_usuario").datepicker();
});

		function sel(){
			for(var i=1; i<table.rows.length;i++){
				table.rows[i].onclick=function(){
					fila=this.rowIndex;
					$("#id").val(this.cells[0].innerHTML);
					$("#contact_password").val(this.cells[4].innerHTML);
					$("#contact_nombre").val(this.cells[5].innerHTML);
					document.getElementById("contact_apellidos").value=this.cells[6].innerHTML;
					$("#contact_descripcion").val(this.cells[7].innerHTML);
					var date=(this.cells[1].innerHTML)+"/"+(this.cells[2].innerHTML)+"/"+(this.cells[3].innerHTML)
    				$("#contact_usuario").datepicker("setDate", date);
    				

				};
			};
		};
		sel();
$(document).ready(function(){
	$("#submit_post").on("click",function(){
		if ($(".form-control").hasClass("invalid")){
			return;
		}
		else{
		var tbody=$("#table tbody");
			fecha=$("#contact_usuario").val();
			dia=$("#contact_usuario").val().substring(0,2);
			mes=$("#contact_usuario").val().substring(3,5);
			año=$("#contact_usuario").val().substring(6,10);
			desde=$("#contact_password").val();
			hasta=$("#contact_nombre").val();
			e = document.getElementById("contact_apellidos");
			strUser = e.options[e.selectedIndex].text;
			camp=strUser;
			descr=$("#contact_descripcion").val();
		tbody.append("<tr><td>" + dia +"</td><td>"+mes+"</td><td>"+año+"</td><td>"+desde+"</td><td>"+hasta+"</td><td>"+camp+"</td><td>"+descr+"</td></tr>");
		sel();
		$.post("../PHP/Insertar.php",{Fecha:fecha, Desde_las:desde, Hasta_las:hasta, Campaña:camp, Descripción:descr},function(resultado){
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
