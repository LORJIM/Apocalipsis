$(document).ready(function(){
	$("#botonn").click(function(){
       $.post('../PHP/seleccionar.php',function(data){
       	$('#tab1').html(data);
       	$("#botonn").toggle();
       });
    });
});