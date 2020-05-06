$(document).ready(function(){

	$(".register-btn").on("click", function(){

		$.ajax({
			url : '../seller/classes/Credentials.php',
			method : "POST",
			data : $("#seller-register-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#seller-register-form").trigger("reset");
					$(".message").html('<span class="text-success">'+resp.message+'</span>');
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});

	$(".login-btn").on("click", function(){

		$.ajax({
			url : '../seller/classes/Credentials.php',
			method : "POST",
			data : $("#seller-login-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#seller-register-form").trigger("reset");
					//$(".message").html('<span class="text-success">'+resp.message+'</span>');
					window.location.href = window.origin+"/DP2-Project/seller/index.php";
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});

});