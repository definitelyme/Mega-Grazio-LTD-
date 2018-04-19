$(function(){
	$("#lname").on("input", function(){
		if($(this).val() == ""){
		    $(this).css("boxShadow","0.1px 0.1px 4px 1px red");
			return false;
		}
		$(this).css("boxShadow","none");
	});	
	$("#fname").on("input", function(){
		if($(this).val() == ""){
		    $(this).css("boxShadow","0.1px 0.1px 4px 1px red");
			return false;
		}
		$(this).css("boxShadow","none");
	});	
	$("#email").on("input", function(){
		if($(this).val() == ""){
		    $(this).css("boxShadow","0.1px 0.1px 4px 1px red");
			return false;
		}
		$(this).css("boxShadow","none");
	});	
	$("#usernm").on("input", function(){
		if($(this).val() == ""){
		    $(this).css("boxShadow","0.1px 0.1px 4px 1px red");
			return false;
		}
		$(this).css("boxShadow","none");
	});
});