$(document).ready(function(){
      $("#x").load("../PHP/CallCenter.php");
       $("form,#add").toggle();
       var variable=$("#variable").val();
       console.log(variable);
       if(variable =="No"){
        $("#reg").hide();
       }
       return;
    });
$(document).ready(function(){
  $("#botonn").click(function(){
       $("#add").toggle();
    });
	$("#tab1").click(function(){
    var date=$("#contact_usuario").val();
    var date2 = new Date();
    var dd = $("#contact_usuario").val().substring(0,2);
    var mm = $("#contact_usuario").val().substring(3,5);
    var yyyy = $("#contact_usuario").val().substring(6,10);;
    var dd2 = date2. getDate();
    var mm2 = date2. getMonth()+1;
    var yyyy2 = date2. getFullYear();
    if(dd2<10) {
      dd2 = '0'+dd2
    } 
    if(mm2<10) {
      mm2 = '0'+mm2
    } 
    date=yyyy + '-' + mm + '-' + dd;
    date2=yyyy2 + '-' + mm2 + '-' + dd2;
    if(date2>date){
      $("form,.edit,.agr").hide()
      alert("Entrada antigua, no se puede modificar");
    }
    else{
		$("form,.edit").show();
		$(".agr").hide();
    };
    });

	$("#add").click(function(){
    $("#id").val("");
    $("#contact_usuario").val("");
    $("#contact_password").val("");
    $("#contact_nombre").val("");
    document.getElementById("contact_apellidos").value="";
    $("#contact_descripcion").val("");
		$("form,.agr").show();
		$(".edit").hide();
    });
  $(".btn").click(function(){
  if ($(".form-control").hasClass("invalid")){
      return;
    }
    else{
       $("form").toggle();
    };
});
});
