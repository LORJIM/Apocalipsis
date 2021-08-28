$(document).ready(function() {
				function u() {
					var input=$('#contact_usuario');
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				};
				
				function p() {
					var input=$('#contact_password');
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				};
				function n() {
					var input=$('#contact_nombre');
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				};
				function a() {
					var input=$('#contact_apellidos');
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				};
				function e() {
					var input=$('#contact_email');
					var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
					var is_email=re.test(input.val());
					if(is_email){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				};
				function d() {
					var input=$('#contact_descripcion');
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				};
				
				
		
			$("#log").click(function(event){
				u();
				p();
				var form_data=$("#contact").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#contact_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
				if (!error_free){
					event.preventDefault(); 
				}
			});
			$("#reg").click(function(event){
				u();
				p();
				n();
				a();
				e();
				d();
				var form_data=$("#contact").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#contact_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
				if (!error_free){
					event.preventDefault(); 
				}
			});
			$(".miau").click(function(event){
				u();
				p();
				n();
				a();
				d();
				var form_data=$("#contact").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#contact_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
				if (!error_free){
					event.preventDefault(); 
				}
			});
			
			
			
		});